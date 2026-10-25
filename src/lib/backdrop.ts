/**
 * Fond de l'accueil : couleur de la page, quatre halos pastel, trame fine.
 * Dessiné en CSS (aucun calcul 3D plein écran), et décrit ici une seule fois :
 * le shader du verre recalcule exactement le même fond pour le réfracter.
 */

export type Halo = { color: string; alpha: number; r: number; x: (t: number) => number; y: (t: number) => number };

// Centre en fraction de l'écran (y vers le haut), rayon en fraction de la hauteur
export const HALOS: Halo[] = [
  { color: '#ffb48f', alpha: 0.6, r: 0.36, x: (t) => 0.72 + 0.12 * Math.sin(t * 2.1), y: (t) => 0.62 + 0.1 * Math.cos(t * 1.7) },
  { color: '#8fb3ff', alpha: 0.55, r: 0.42, x: (t) => 0.3 + 0.1 * Math.cos(t * 1.3), y: (t) => 0.3 + 0.12 * Math.sin(t * 1.9) },
  { color: '#d4b8ff', alpha: 0.55, r: 0.33, x: (t) => 0.55 + 0.15 * Math.sin(t * 1.1 + 2), y: (t) => 0.85 + 0.08 * Math.sin(t * 2.3) },
  { color: '#8ee3c8', alpha: 0.45, r: 0.29, x: (t) => 0.88 + 0.08 * Math.cos(t * 1.5), y: (t) => 0.18 + 0.1 * Math.cos(t * 1.2) },
];

export const PAGE = '#f2f2ee';
export const INK = '#111214';

/** Trame : une ligne de 1 px toutes les 56 px, décalée de 28 px. */
export const GRID = { step: 56, offset: 28, alpha: 0.045 };

const rgb = (hex: string) => [1, 3, 5].map((i) => parseInt(hex.slice(i, i + 2), 16));

/**
 * Position continue dans la liste des sections : 2.4 = entre la 3e et la 4e.
 * La section suivante prend la main sur les 40 derniers pourcents de la précédente.
 */
export function sceneProgress(sections: HTMLElement[], max: number) {
  const mid = innerHeight * 0.55;
  let value = 0;
  for (let i = 0; i < sections.length; i++) {
    const r = sections[i].getBoundingClientRect();
    if (r.top > mid) break;
    const t = Math.min(1, (mid - r.top) / Math.max(r.height, 1));
    value = i + (i < sections.length - 1 ? Math.max(0, (t - 0.6) / 0.4) : 0);
  }
  return Math.min(value, max);
}

export type Backdrop = ReturnType<typeof mountBackdrop>;

export function mountBackdrop(el: HTMLElement) {
  // Profil gaussien exp(-k²) approché par des paliers, jusqu'à 2,5 rayons
  const steps = [0, 0.25, 0.5, 0.75, 1, 1.25, 1.5, 1.75, 2, 2.5];
  const halos = HALOS.map((h) => {
    const div = document.createElement('div');
    const [r, g, b] = rgb(h.color);
    const stops = steps.map((k) => `rgb(${r} ${g} ${b} / ${(h.alpha * Math.exp(-k * k)).toFixed(4)}) ${(k / 2.5) * 50}%`);
    div.style.cssText = `position:absolute;left:0;top:0;border-radius:50%;will-change:transform;background:radial-gradient(closest-side, ${stops.join(',')})`;
    el.append(div);
    return { h, div, size: 0 };
  });
  const grid = document.createElement('div');
  const [ir, ig, ib] = rgb(INK);
  const line = `rgb(${ir} ${ig} ${ib} / ${GRID.alpha})`;
  grid.style.cssText = `position:absolute;inset:0;background-image:linear-gradient(to right, ${line} 1px, transparent 1px),linear-gradient(to bottom, ${line} 1px, transparent 1px);background-size:${GRID.step}px ${GRID.step}px;background-position:${GRID.offset}px ${GRID.offset}px`;
  el.append(grid);

  const resize = () => {
    halos.forEach((o) => {
      o.size = Math.round(o.h.r * innerHeight * 5);
      o.div.style.width = o.div.style.height = `${o.size}px`;
    });
  };
  resize();
  addEventListener('resize', resize);

  /** Centres des halos en px CSS (origine en haut à gauche), pour le shader. */
  const centers = new Float32Array(HALOS.length * 2);

  return {
    centers,
    update(time: number, morph: number) {
      const t = time * 0.05 + morph * 0.6;
      const w = innerWidth;
      const h = innerHeight;
      halos.forEach((o, i) => {
        const x = o.h.x(t) * w;
        const y = (1 - o.h.y(t)) * h;
        centers[i * 2] = x;
        centers[i * 2 + 1] = y;
        o.div.style.transform = `translate3d(${(x - o.size / 2).toFixed(1)}px, ${(y - o.size / 2).toFixed(1)}px, 0)`;
      });
    },
    dispose() {
      removeEventListener('resize', resize);
    },
  };
}
