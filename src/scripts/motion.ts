import Lenis from 'lenis';

/**
 * Mouvement commun à toutes les pages : défilement avec inertie, transitions
 * liquides entre pages, titres lettre par lettre et mot par mot, plaques de verre
 * pilotées par le défilement, boutons aimantés, curseur, compteurs.
 * Rien de tout ça sans JS ni si l'utilisateur a demandé moins d'animations.
 */
const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
const fine = matchMedia('(pointer: fine)').matches;
const clamp = (v: number, a = 0, b = 1) => Math.min(b, Math.max(a, v));
const smooth = (t: number) => t * t * (3 - 2 * t);

/**
 * Transition liquide : une goutte couleur page couvre l'écran depuis (x, y), puis
 * on navigue. La page d'arrivée s'ouvre depuis le même point (script inline de Base.astro).
 */
export function liquidGo(href: string, x: number, y: number) {
  try {
    sessionStorage.setItem('vt-origin', JSON.stringify({ x, y }));
  } catch {}
  if (reduce) {
    location.href = href;
    return;
  }
  const h = document.documentElement;
  h.style.setProperty('--lx', `${x}px`);
  h.style.setProperty('--ly', `${y}px`);
  h.classList.add('liquid-out');
  setTimeout(() => (location.href = href), 600);
}

// Retour par l'historique depuis le cache : on retire l'écran couvrant
addEventListener('pageshow', (e) => {
  if (e.persisted) document.documentElement.classList.remove('liquid-out', 'liquid-in');
});

// Tout lien interne vers une autre page part du point cliqué
document.addEventListener('click', (e) => {
  const a = e.target instanceof Element ? e.target.closest<HTMLAnchorElement>('a[href]') : null;
  if (!a || e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;
  if (a.target === '_blank' || a.hasAttribute('download') || a.origin !== location.origin) return;
  if (a.pathname === location.pathname) return;
  if (/\.(pdf|png|jpe?g|webp|svg|zip)$/i.test(a.pathname)) return;
  e.preventDefault();
  liquidGo(a.href, e.clientX, e.clientY);
});

if (!reduce) {
  document.documentElement.classList.add('motion');

  const lenis = new Lenis({ lerp: 0.085, anchors: { offset: -72 } });

  // Lettres du grand titre, chacune dans un masque
  document.querySelectorAll<HTMLElement>('[data-chars]').forEach((line) => {
    let c = 0;
    const walk = (node: Node) => {
      [...node.childNodes].forEach((child) => {
        if (child.nodeType !== Node.TEXT_NODE) return walk(child);
        const frag = document.createDocumentFragment();
        [...child.textContent!].forEach((ch) => {
          const span = document.createElement('span');
          span.className = 'char';
          span.style.setProperty('--c', String(c++));
          span.textContent = ch;
          frag.append(span);
        });
        child.replaceWith(frag);
      });
    };
    walk(line);
    line.setAttribute('aria-hidden', 'true');
  });

  // Titres de section mot par mot
  document.querySelectorAll<HTMLElement>('[data-split]').forEach((el) => {
    let i = 0;
    const walk = (node: Node) => {
      [...node.childNodes].forEach((child) => {
        if (child.nodeType !== Node.TEXT_NODE) return walk(child);
        const frag = document.createDocumentFragment();
        child.textContent!.split(/(\s+)/).forEach((part) => {
          if (!part) return;
          if (/^\s+$/.test(part)) return frag.append(part);
          const mask = document.createElement('span');
          mask.className = 'w';
          const word = document.createElement('span');
          word.style.setProperty('--i', String(i++));
          word.textContent = part;
          mask.append(word);
          frag.append(mask);
        });
        child.replaceWith(frag);
      });
    };
    walk(el);
  });

  document.querySelectorAll<HTMLElement>('[data-stagger]').forEach((el) => {
    [...el.children].forEach((child, i) => {
      if (child.hasAttribute('data-split')) return;
      child.setAttribute('data-reveal', '');
      (child as HTMLElement).style.setProperty('--i', String(i));
    });
  });

  // Compteurs : de 0 à la valeur réelle, une fois
  const count = (el: HTMLElement) => {
    const end = Number(el.dataset.count);
    const fmt = new Intl.NumberFormat(el.dataset.locale);
    const t0 = performance.now();
    const step = (t: number) => {
      const p = clamp((t - t0) / 1600);
      el.textContent = fmt.format(Math.round(end * (1 - Math.pow(2, -10 * p))));
      if (p < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  };

  const io = new IntersectionObserver(
    (entries) =>
      entries.forEach((e) => {
        if (!e.isIntersecting) return;
        e.target.classList.add('in');
        e.target.querySelectorAll<HTMLElement>('[data-count]').forEach(count);
        io.unobserve(e.target);
      }),
    { rootMargin: '0px 0px -12% 0px' },
  );
  document.querySelectorAll('[data-split], [data-reveal]').forEach((el) => io.observe(el));

  // Plaques de verre : la suivante arrive de la profondeur, la précédente passe derrière le spectateur
  const panes = [...document.querySelectorAll<HTMLElement>('[data-pane]')];
  const tilt = fine ? 1 : 0.5;
  const updatePanes = () => {
    const h = innerHeight;
    for (const p of panes) {
      const r = p.getBoundingClientRect();
      if (r.bottom < -h || r.top > 2 * h) continue;
      const ein = smooth(clamp((r.top - h * 0.16) / (h * 0.84)));
      const eout = Math.pow(clamp((h * 0.62 - r.bottom) / (h * 0.62)), 1.6);
      const z = -ein * 320 + eout * 160;
      p.style.transform = `perspective(1400px) translate3d(0, ${ein * 60}px, ${z}px) rotateX(${ein * 18 * tilt}deg)`;
      p.style.opacity = String(clamp(1 - ein * 0.6 - eout * 0.95));
    }
  };
  // Mis à jour à chaque image : couvre aussi les sauts d'ancre et la restauration du défilement
  const raf = (t: number) => {
    lenis.raf(t);
    if (panes.length) updatePanes();
    requestAnimationFrame(raf);
  };
  requestAnimationFrame(raf);

  if (fine) {
    // Boutons aimantés
    document.querySelectorAll<HTMLElement>('[data-magnetic]').forEach((el) => {
      el.addEventListener('pointermove', (e) => {
        const r = el.getBoundingClientRect();
        const dx = (e.clientX - r.left - r.width / 2) / r.width;
        const dy = (e.clientY - r.top - r.height / 2) / r.height;
        el.style.transform = `translate(${dx * 14}px, ${dy * 12}px)`;
      });
      el.addEventListener('pointerleave', () => (el.style.transform = ''));
    });

    // Curseur : un anneau qui suit avec retard et s'ouvre sur ce qui se clique
    const ring = document.createElement('div');
    ring.className = 'cursor';
    ring.setAttribute('aria-hidden', 'true');
    ring.innerHTML = `<span>${document.documentElement.lang === 'fr' ? 'Ouvrir' : 'Open'}</span>`;
    document.body.append(ring);
    const pos = { x: -100, y: -100, tx: -100, ty: -100 };
    addEventListener('pointermove', (e) => {
      pos.tx = e.clientX;
      pos.ty = e.clientY;
      const over = e.target instanceof Element && e.target.closest('a, button, [data-copy]');
      ring.toggleAttribute('data-link', !!over);
      ring.toggleAttribute('data-show', true);
    }, { passive: true });
    document.addEventListener('pointerleave', () => ring.removeAttribute('data-show'));
    const follow = () => {
      pos.x += (pos.tx - pos.x) * 0.2;
      pos.y += (pos.ty - pos.y) * 0.2;
      ring.style.transform = `translate3d(${pos.x}px, ${pos.y}px, 0)`;
      requestAnimationFrame(follow);
    };
    requestAnimationFrame(follow);
  }
}
