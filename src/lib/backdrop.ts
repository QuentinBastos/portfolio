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
  // Les halos sont des dégradés très doux : dessinés dans une petite toile (1/8 de
  // l'écran) puis agrandis, ils rendent pareil pour une fraction de la mémoire
  // graphique. En CSS, quatre calques de plusieurs milliers de pixels saccadaient sur téléphone.
  const SCALE = 8;
  const canvas = document.createElement('canvas');
  canvas.style.cssText = 'position:absolute;inset:0;width:100%;height:100%';
  el.append(canvas);
  const ctx = canvas.getContext('2d')!;
  // Profil gaussien exp(-k²) approché par des paliers, jusqu'à 2,5 rayons
  const steps = [0, 0.25, 0.5, 0.75, 1, 1.25, 1.5, 1.75, 2, 2.5];
  const tones = HALOS.map((h) => {
    const [r, g, b] = rgb(h.color);
    const stops = steps.map((k) => [k / 5, `rgb(${r} ${g} ${b} / ${(h.alpha * Math.exp(-k * k)).toFixed(4)})`] as const);
    // Hors de l'ancien disque : rien, comme en CSS
    return [...stops, [0.5001, `rgb(${r} ${g} ${b} / 0)`] as const];
  });

  const grid = document.createElement('div');
  const [ir, ig, ib] = rgb(INK);
  const line = `rgb(${ir} ${ig} ${ib} / ${GRID.alpha})`;
  grid.style.cssText = `position:absolute;inset:0;background-image:linear-gradient(to right, ${line} 1px, transparent 1px),linear-gradient(to bottom, ${line} 1px, transparent 1px);background-size:${GRID.step}px ${GRID.step}px;background-position:${GRID.offset}px ${GRID.offset}px`;
  el.append(grid);

  const resize = () => {
    canvas.width = Math.ceil(innerWidth / SCALE);
    canvas.height = Math.ceil(innerHeight / SCALE);
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
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      HALOS.forEach((o, i) => {
        const x = o.x(t) * w;
        const y = (1 - o.y(t)) * h;
        centers[i * 2] = x;
        centers[i * 2 + 1] = y;
        // Même géométrie que l'ancien radial-gradient : rayon 2,5 r, paliers à k/5 du rayon
        const radius = (o.r * h * 2.5) / SCALE;
        const g = ctx.createRadialGradient(x / SCALE, y / SCALE, 0, x / SCALE, y / SCALE, radius);
        tones[i].forEach(([at, c]) => g.addColorStop(at, c));
        ctx.fillStyle = g;
        ctx.fillRect(0, 0, canvas.width, canvas.height);
      });
    },
    dispose() {
      removeEventListener('resize', resize);
    },
  };
}
