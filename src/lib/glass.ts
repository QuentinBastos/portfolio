import {
  BufferAttribute,
  Color,
  IcosahedronGeometry,
  Mesh,
  PerspectiveCamera,
  Quaternion,
  Scene,
  ShaderMaterial,
  Timer,
  Vector2,
  Vector3,
  WebGLRenderer,
} from 'three';
import { mergeVertices } from 'three/addons/utils/BufferGeometryUtils.js';
import { createDrops, type DropInput } from './drops';
import { GRID, HALOS, INK, PAGE, sceneProgress, type Backdrop } from './backdrop';

/**
 * Goutte de verre irisé derrière l'accueil. Chaque section porte un `data-scene` :
 * en défilant, la goutte prend la forme suivante. Le fond est en CSS (backdrop.ts) ;
 * le verre n'est pas une vraie transmission (qui redessine toute la scène à chaque
 * image) mais un shader qui recalcule ce fond aux points réfractés. Assez léger
 * pour tourner sans carte graphique.
 */

// Décalage horizontal et échelle par scène (bureau), dans l'ordre des sections
const LAYOUT: { x: number; s: number }[] = [
  { x: 2.2, s: 1.4 },
  { x: 2.3, s: 1.05 },
  { x: -2.4, s: 1 },
  { x: 1.9, s: 0.0001 },
  { x: -2.5, s: 1.05 },
  { x: 0, s: 1.15 },
];

const noise = /* glsl */ `
  vec3 mod289(vec3 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
  vec4 mod289(vec4 x) { return x - floor(x * (1.0 / 289.0)) * 289.0; }
  vec4 permute(vec4 x) { return mod289(((x * 34.0) + 10.0) * x); }
  vec4 taylorInvSqrt(vec4 r) { return 1.79284291400159 - 0.85373472095314 * r; }
  float snoise(vec3 v) {
    const vec2 C = vec2(1.0 / 6.0, 1.0 / 3.0);
    const vec4 D = vec4(0.0, 0.5, 1.0, 2.0);
    vec3 i = floor(v + dot(v, C.yyy));
    vec3 x0 = v - i + dot(i, C.xxx);
    vec3 g = step(x0.yzx, x0.xyz);
    vec3 l = 1.0 - g;
    vec3 i1 = min(g.xyz, l.zxy);
    vec3 i2 = max(g.xyz, l.zxy);
    vec3 x1 = x0 - i1 + C.xxx;
    vec3 x2 = x0 - i2 + C.yyy;
    vec3 x3 = x0 - D.yyy;
    i = mod289(i);
    vec4 p = permute(permute(permute(i.z + vec4(0.0, i1.z, i2.z, 1.0)) + i.y + vec4(0.0, i1.y, i2.y, 1.0)) + i.x + vec4(0.0, i1.x, i2.x, 1.0));
    float n_ = 0.142857142857;
    vec3 ns = n_ * D.wyz - D.xzx;
    vec4 j = p - 49.0 * floor(p * ns.z * ns.z);
    vec4 x_ = floor(j * ns.z);
    vec4 y_ = floor(j - 7.0 * x_);
    vec4 x = x_ * ns.x + ns.yyyy;
    vec4 y = y_ * ns.x + ns.yyyy;
    vec4 h = 1.0 - abs(x) - abs(y);
    vec4 b0 = vec4(x.xy, y.xy);
    vec4 b1 = vec4(x.zw, y.zw);
    vec4 s0 = floor(b0) * 2.0 + 1.0;
    vec4 s1 = floor(b1) * 2.0 + 1.0;
    vec4 sh = -step(h, vec4(0.0));
    vec4 a0 = b0.xzyw + s0.xzyw * sh.xxyy;
    vec4 a1 = b1.xzyw + s1.xzyw * sh.zzww;
    vec3 g0 = vec3(a0.xy, h.x);
    vec3 g1 = vec3(a0.zw, h.y);
    vec3 g2 = vec3(a1.xy, h.z);
    vec3 g3 = vec3(a1.zw, h.w);
    vec4 norm = taylorInvSqrt(vec4(dot(g0, g0), dot(g1, g1), dot(g2, g2), dot(g3, g3)));
    g0 *= norm.x; g1 *= norm.y; g2 *= norm.z; g3 *= norm.w;
    vec4 m = max(0.5 - vec4(dot(x0, x0), dot(x1, x1), dot(x2, x2), dot(x3, x3)), 0.0);
    m = m * m;
    return 105.0 * dot(m * m, vec4(dot(g0, x0), dot(g1, x1), dot(g2, x2), dot(g3, x3)));
  }
`;

// Formes, toutes obtenues en déformant une sphère unité : pas de couture, morphing libre
const shapes = /* glsl */ `
  uniform float uTime;
  uniform float uMorph;
  uniform vec3 uMouseDir;
  uniform float uHover;

  vec3 shapeAt(float k, vec3 p) {
    // Accueil : galet
    if (k < 0.5) return p;
    // SparkleQuiz : sphère qui bat au rythme de la production
    if (k < 1.5) return p;
    // Parcours : trois pétales autour de l'axe, les trois ERP
    if (k < 2.5) {
      float petal = 0.88 + 0.3 * cos(3.0 * atan(p.z, p.x)) * (1.0 - p.y * p.y);
      return vec3(p.x * petal, p.y * 0.8, p.z * petal);
    }
    // Projets : cube arrondi
    if (k < 3.5) {
      vec3 a = abs(p);
      return p / pow(a.x * a.x * a.x * a.x + a.y * a.y * a.y * a.y + a.z * a.z * a.z * a.z, 0.25) * 0.8;
    }
    // Stage : ruban torsadé
    if (k < 4.5) {
      float t = p.y * 2.6;
      vec3 q = vec3(p.x * 0.5, p.y * 1.65, p.z * 0.95);
      return vec3(q.x * cos(t) - q.z * sin(t), q.y, q.x * sin(t) + q.z * cos(t));
    }
    // Contact : lentille
    return vec3(p.x * 1.15, p.y * 0.62, p.z * 1.15);
  }

  vec3 displaced(vec3 p) {
    float a = floor(uMorph);
    float f = uMorph - a;
    float e = f * f * (3.0 - 2.0 * f);
    vec3 s = mix(shapeAt(a, p), shapeAt(min(a + 1.0, 5.0), p), e);
    // Respiration permanente, plus forte pendant une transformation
    float wobble = 0.06 + sin(e * 3.14159) * 0.14;
    s += p * snoise(p * 1.1 + uTime * 0.18) * wobble;
    // La souris attire la surface vers elle
    float m = max(dot(p, uMouseDir), 0.0);
    s += p * pow(m, 5.0) * 0.16 * uHover;
    return s;
  }
`;

const vertex = /* glsl */ `
  ${noise}
  ${shapes}
  varying vec3 vN;
  varying vec3 vV;
  void main() {
    vec3 dp = displaced(position);
    vec3 helper = abs(normal.y) < 0.99 ? vec3(0.0, 1.0, 0.0) : vec3(1.0, 0.0, 0.0);
    vec3 tng = normalize(cross(normal, helper));
    vec3 btg = normalize(cross(normal, tng));
    vec3 da = displaced(normalize(position + tng * 0.01));
    vec3 db = displaced(normalize(position + btg * 0.01));
    vec3 nn = cross(da - dp, db - dp);
    // cross(tng, btg) = normal : l'orientation reste vers l'extérieur, même dans les creux.
    // Garde-fou : une normale nulle donnerait des pixels noirs
    vec3 objectNormal = dot(nn, nn) > 1e-14 ? normalize(nn) : normal;
    vN = normalize(normalMatrix * objectNormal);
    vec4 mv = modelViewMatrix * vec4(dp, 1.0);
    vV = -mv.xyz;
    gl_Position = projectionMatrix * mv;
  }
`;

const glslColor = (hex: string) => `vec3(${[1, 3, 5].map((i) => (parseInt(hex.slice(i, i + 2), 16) / 255).toFixed(4)).join(', ')})`;
const halos = HALOS.map(
  (h, i) => `col = mix(col, ${glslColor(h.color)}, ${h.alpha} * exp(-dot(px - uHalo[${i}], px - uHalo[${i}]) / ${(h.r * h.r).toFixed(4)} / (uRes.y * uRes.y)));`,
).join('\n    ');

// Tout en sRGB, comme le CSS du fond : les couleurs se raccordent au pixel près
const fragment = /* glsl */ `
  uniform vec2 uRes;
  uniform float uDpr;
  uniform vec2 uHalo[4];
  uniform float uRadius;
  uniform vec3 uTint;
  uniform float uTintAmount;
  uniform float uTime;
  varying vec3 vN;
  varying vec3 vV;

  // Le fond CSS, recalculé en un point (px CSS, origine en haut à gauche)
  vec3 backdrop(vec2 px) {
    vec3 col = ${glslColor(PAGE)};
    ${halos}
    vec2 g = mod(px - ${GRID.offset.toFixed(1)}, ${GRID.step.toFixed(1)});
    float line = 1.0 - step(1.0, min(g.x, g.y));
    return mix(col, ${glslColor(INK)}, line * ${GRID.alpha});
  }

  // Boîte à lumière rectangulaire vue dans la direction r : les reflets de fenêtre du verre
  float softbox(vec3 r, vec3 dir, vec2 size) {
    vec3 z = normalize(dir);
    vec3 x = normalize(cross(vec3(0.0, 1.0, 0.0), z));
    vec3 y = cross(z, x);
    float k = dot(r, z);
    if (k <= 0.0) return 0.0;
    vec2 q = abs(vec2(dot(r, x), dot(r, y)) / k) / size;
    return 1.0 - smoothstep(0.35, 1.0, max(q.x, q.y));
  }

  void main() {
    vec3 n = normalize(vN);
    vec3 v = normalize(vV);
    // Dans les plis, la normale lissée peut tourner le dos à la caméra : on la redresse
    float facing = dot(n, v);
    if (facing < 0.08) n = normalize(n + v * (0.08 - facing));
    facing = clamp(dot(n, v), 0.0, 1.0);
    float edge = 1.0 - facing;
    float fres = 0.04 + 0.96 * pow(edge, 5.0);

    // Réfraction : une bille épaisse renverse et grossit ce qu'il y a derrière
    vec2 px = vec2(gl_FragCoord.x, uRes.y * uDpr - gl_FragCoord.y) / uDpr;
    vec2 bend = vec2(-n.x, n.y) * uRadius * (0.42 + 0.25 * edge);
    vec3 col = vec3(
      backdrop(px + bend * 0.94).r,
      backdrop(px + bend).g,
      backdrop(px + bend * 1.07).b
    );
    // Masse du verre : voile laiteux, teinte de la section SparkleQuiz, bord plus dense
    col = mix(col, vec3(1.0), 0.16);
    col = mix(col, col * uTint, uTintAmount);
    col *= 1.0 - 0.1 * pow(edge, 3.0);
    // Volume : bord inférieur un peu plus sombre, fin liseré gris sur la silhouette
    col *= 0.95 + 0.05 * n.y;
    col *= 1.0 - 0.14 * smoothstep(0.78, 0.97, edge);

    // Reflets : studio clair et deux fenêtres floues, surtout visibles en bordure
    vec3 r = reflect(-v, n);
    float studio = 0.9 + 0.1 * r.y;
    float boxes = softbox(r, vec3(-0.6, 0.75, 0.6), vec2(0.36, 0.26)) + softbox(r, vec3(0.8, 0.3, 0.45), vec2(0.14, 0.4)) * 0.7;
    col = mix(col, vec3(studio), fres * 0.75);
    col += boxes * (0.12 + 0.6 * fres);

    // Irisation en couche mince, discrète : elle ne colore vraiment que le pourtour
    float film = edge * 1.4 + n.y * 0.2 + uTime * 0.03;
    vec3 irid = 0.5 + 0.5 * cos(6.2831 * (film + vec3(0.0, 0.33, 0.67)));
    col += (irid - 0.5) * (0.025 + 0.16 * pow(edge, 3.0));

    gl_FragColor = vec4(clamp(col, 0.0, 1.0), 1.0);
  }
`;

export type Glass = { dispose: () => void; highlight: (i: number) => void };

export type GlassOptions = {
  drops: DropInput[];
  /** État de SparkleQuiz relevé au build : teinte et battement de la goutte. */
  live: 'up' | 'down' | 'unknown';
  /** Rendu sans carte graphique : moins de pixels, moins de sommets. */
  lite?: boolean;
  onDropHover?: (i: number) => void;
  onDropOpen?: (i: number, x: number, y: number) => void;
};

// Double battement, période 1,1 s
const beat = (t: number) => {
  const m = t % 1.1;
  return Math.exp(-((m - 0.1) ** 2) * 160) + 0.55 * Math.exp(-((m - 0.32) ** 2) * 160);
};

export function mountGlass(canvas: HTMLCanvasElement, backdrop: Backdrop, sections: HTMLElement[], options: GlassOptions): Glass {
  const mobile = matchMedia('(max-width: 767px)').matches;
  const lite = !!options.lite;
  const dpr = Math.min(devicePixelRatio, mobile ? 1.5 : 2);
  // Plafond de pixels : au-delà, un grand écran coûte sans rien apporter de visible
  const budget = lite ? 0.9e6 : mobile ? 1.6e6 : 3e6;
  let quality = 1;
  const ratio = () => Math.min(dpr, Math.sqrt(budget / (innerWidth * innerHeight))) * quality;

  const renderer = new WebGLRenderer({ canvas, alpha: true, antialias: !lite, powerPreference: 'high-performance' });
  renderer.setClearColor(0x000000, 0);

  const scene = new Scene();
  const camera = new PerspectiveCamera(35, 1, 0.1, 50);
  camera.position.set(0, 0, 8);

  const halo = HALOS.map(() => new Vector2());

  // Sphère indexée : les sommets partagés gardent la surface lisse pendant la déformation
  let geometry = new IcosahedronGeometry(1, lite || mobile ? 40 : 64);
  geometry.deleteAttribute('normal');
  geometry.deleteAttribute('uv');
  geometry = mergeVertices(geometry) as IcosahedronGeometry;
  geometry.setAttribute('normal', new BufferAttribute((geometry.getAttribute('position').array as Float32Array).slice(), 3));

  // Teinte en sRGB, comme le reste du shader
  const liveTint = new Color(options.live === 'down' ? '#ffb8a3' : '#c2f5d9').convertLinearToSRGB();
  const uniforms = {
    uTime: { value: 0 },
    uMorph: { value: 0 },
    uMouseDir: { value: new Vector3(0, 0, 1) },
    uHover: { value: 0 },
    uRes: { value: new Vector2(1, 1) },
    uDpr: { value: 1 },
    uHalo: { value: halo },
    uRadius: { value: 100 },
    uTint: { value: new Vector3(liveTint.r, liveTint.g, liveTint.b) },
    uTintAmount: { value: 0 },
  };
  const material = new ShaderMaterial({ uniforms, vertexShader: vertex, fragmentShader: fragment, toneMapped: false });

  const blob = new Mesh(geometry, material);
  scene.add(blob);

  const drops = createDrops(options.drops, mobile, lite);
  scene.add(drops.group);

  const pointer = { x: 0, y: 0, on: false, cx: 0, cy: 0, overUi: false };
  let lastHover = -1;
  const updateHover = () => {
    // Une goutte sous un lien ou un bouton laisse la priorité au HTML
    if (pointer.overUi) drops.clearPointer();
    else drops.pointerAt(pointer.cx, pointer.cy, camera);
    if (drops.hovered !== lastHover) {
      lastHover = drops.hovered;
      document.documentElement.toggleAttribute('data-drop-hover', lastHover >= 0);
      options.onDropHover?.(lastHover);
    }
  };
  const onMove = (e: PointerEvent) => {
    pointer.x = (e.clientX / innerWidth) * 2 - 1;
    pointer.y = -(e.clientY / innerHeight) * 2 + 1;
    pointer.on = e.pointerType === 'mouse';
    if (!pointer.on) return;
    pointer.cx = e.clientX;
    pointer.cy = e.clientY;
    pointer.overUi = e.target instanceof Element && !!e.target.closest('a, button');
    updateHover();
  };
  // Le défilement déplace les gouttes sous une souris immobile
  let hoverQueued = false;
  const onScroll = () => {
    if (!pointer.on || hoverQueued) return;
    hoverQueued = true;
    setTimeout(() => ((hoverQueued = false), updateHover()), 120);
  };
  const onLeave = () => {
    pointer.on = false;
    drops.clearPointer();
  };
  const onClick = (e: MouseEvent) => {
    if (e.target instanceof Element && e.target.closest('a, button, input')) return;
    const i = drops.hit(e.clientX, e.clientY, camera);
    if (i < 0) return;
    const at = drops.screenOf(i, camera);
    options.onDropOpen?.(i, at.x, at.y);
  };
  addEventListener('pointermove', onMove, { passive: true });
  addEventListener('scroll', onScroll, { passive: true });
  addEventListener('click', onClick);
  document.addEventListener('pointerleave', onLeave);

  const halfH = Math.tan((camera.fov * Math.PI) / 360) * camera.position.z;
  const resize = () => {
    const w = innerWidth;
    const h = innerHeight;
    renderer.setPixelRatio(ratio());
    renderer.setSize(w, h, false);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    uniforms.uRes.value.set(w, h);
    uniforms.uDpr.value = renderer.getPixelRatio();
  };
  resize();
  addEventListener('resize', resize);

  const timer = new Timer();
  timer.connect(document);
  let morph = sceneProgress(sections, LAYOUT.length - 1);
  let hover = 0;
  let intro = 0;
  const inverse = new Quaternion();
  const toMouse = new Vector3();

  // Qualité adaptative : on mesure la cadence réelle et on baisse la résolution tant qu'elle est trop lente
  let last = 0;
  let frames = 0;
  let spent = 0;
  let warmup = 30;
  const govern = (t: number) => {
    const d = last ? t - last : 0;
    last = t;
    // Onglet en arrière-plan ou pause du navigateur : la mesure ne vaut rien
    if (d <= 0 || d > 250) return;
    if (warmup > 0) return void warmup--;
    frames++;
    spent += d;
    if (frames < 40) return;
    const avg = spent / frames;
    frames = 0;
    spent = 0;
    if (avg < 24 || quality <= 0.5) return;
    quality = Math.max(0.5, quality * 0.8);
    resize();
    warmup = 10;
  };

  renderer.setAnimationLoop((t) => {
    govern(t);
    timer.update(t);
    // Le premier delta peut être négatif (horodatage rAF antérieur au Timer)
    const dt = Math.max(0, Math.min(timer.getDelta(), 0.05));
    const time = timer.getElapsed();

    morph += (sceneProgress(sections, LAYOUT.length - 1) - morph) * (1 - Math.exp(-dt * 2.6));
    intro = Math.min(1, intro + dt * 0.7);
    const grow = 1 - Math.pow(1 - intro, 4);

    backdrop.update(time, morph);
    halo.forEach((v, i) => v.set(backdrop.centers[i * 2], backdrop.centers[i * 2 + 1]));

    const a = Math.max(0, Math.min(Math.floor(morph), LAYOUT.length - 1));
    const f = morph - a;
    const k = f * f * (3 - 2 * f);
    const from = LAYOUT[a];
    const to = LAYOUT[Math.min(a + 1, LAYOUT.length - 1)];
    blob.position.x = mobile ? 1.1 : from.x + (to.x - from.x) * k;
    blob.position.y = mobile ? 1.9 : Math.sin(time * 0.6) * 0.08;
    // Section SparkleQuiz : la goutte bat et se teinte selon l'état de la prod
    const w1 = Math.max(0, 1 - Math.abs(morph - 1) * 1.4);
    const pulse = options.live === 'unknown' ? 0 : beat(time) * 0.05 * w1;
    blob.scale.setScalar((from.s + (to.s - from.s) * k) * (mobile ? 0.62 : 1) * grow * (1 + pulse));
    blob.visible = blob.scale.x > 0.002;
    uniforms.uTintAmount.value = w1 * 0.6;
    // Rayon apparent en px CSS : règle l'ampleur de la réfraction
    uniforms.uRadius.value = (blob.scale.x / halfH) * (innerHeight / 2);

    // Section Projets : la goutte se divise en une goutte par projet
    const w3raw = Math.max(0, 1 - Math.abs(morph - 3) * 1.5);
    const w3 = w3raw * w3raw * (3 - 2 * w3raw);
    // Le groupe de gouttes tient dans la moitié droite, quel que soit le format d'écran
    const fit = Math.min(1, Math.max(0.55, (halfH * camera.aspect - LAYOUT[3].x - 0.3) / 2.4));
    drops.update(dt, time, w3, { x: mobile ? 1.1 : LAYOUT[3].x, y: mobile ? 1.7 : 0 }, pointer, fit);
    blob.rotation.y = time * 0.12 + morph * 1.1 + pointer.x * 0.25;
    blob.rotation.x = Math.sin(time * 0.17) * 0.25 - pointer.y * 0.2;
    blob.rotation.z = morph * 0.35;

    hover += ((pointer.on ? 1 : 0) - hover) * (1 - Math.exp(-dt * 3));
    toMouse.set(pointer.x * halfH * camera.aspect, pointer.y * halfH, 2).sub(blob.position).normalize();
    inverse.copy(blob.quaternion).invert();
    uniforms.uMouseDir.value.copy(toMouse.applyQuaternion(inverse));
    uniforms.uHover.value = hover;
    uniforms.uMorph.value = morph;
    uniforms.uTime.value = time;

    renderer.render(scene, camera);
  });

  return {
    highlight: (i) => drops.highlight(i),
    dispose() {
      renderer.setAnimationLoop(null);
      removeEventListener('pointermove', onMove);
      removeEventListener('scroll', onScroll);
      removeEventListener('click', onClick);
      drops.dispose();
      removeEventListener('resize', resize);
      document.removeEventListener('pointerleave', onLeave);
      timer.dispose();
      geometry.dispose();
      material.dispose();
      renderer.dispose();
    },
  };
}
