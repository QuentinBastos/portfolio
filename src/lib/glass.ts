import {
  BufferAttribute,
  Color,
  IcosahedronGeometry,
  Mesh,
  MeshPhysicalMaterial,
  NeutralToneMapping,
  PerspectiveCamera,
  PlaneGeometry,
  PMREMGenerator,
  Quaternion,
  Scene,
  ShaderMaterial,
  Timer,
  Vector2,
  Vector3,
  WebGLRenderer,
} from 'three';
import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';
import { mergeVertices } from 'three/addons/utils/BufferGeometryUtils.js';
import { createDrops, type DropInput } from './drops';

/**
 * Goutte de verre irisé plein écran derrière l'accueil. Chaque section porte un
 * `data-scene` : en défilant, la goutte prend la forme suivante. Le fond (couleur
 * de la page, halos pastel, trame fine) est dessiné dans la scène pour que le
 * verre ait quelque chose à réfracter.
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

const backdropFrag = /* glsl */ `
  uniform vec2 uRes;
  uniform float uTime;
  uniform float uMorph;
  uniform float uDpr;
  uniform vec3 uBg;
  uniform vec3 uA;
  uniform vec3 uB;
  uniform vec3 uC;
  uniform vec3 uD;
  uniform vec3 uLine;
  varying vec2 vUv;

  float blob(vec2 uv, vec2 c, float r) {
    return exp(-dot(uv - c, uv - c) / (r * r));
  }

  void main() {
    vec2 uv = vUv;
    float asp = uRes.x / uRes.y;
    vec2 q = vec2(uv.x * asp, uv.y);
    float t = uTime * 0.05 + uMorph * 0.6;
    vec3 col = uBg;
    col = mix(col, uA, 0.55 * blob(q, vec2(asp * (0.72 + 0.12 * sin(t * 2.1)), 0.62 + 0.1 * cos(t * 1.7)), 0.28));
    col = mix(col, uB, 0.5 * blob(q, vec2(asp * (0.3 + 0.1 * cos(t * 1.3)), 0.3 + 0.12 * sin(t * 1.9)), 0.32));
    col = mix(col, uC, 0.5 * blob(q, vec2(asp * (0.55 + 0.15 * sin(t * 1.1 + 2.0)), 0.85 + 0.08 * sin(t * 2.3)), 0.25));
    col = mix(col, uD, 0.4 * blob(q, vec2(asp * (0.88 + 0.08 * cos(t * 1.5)), 0.18 + 0.1 * cos(t * 1.2)), 0.22));
    // Trame très fine : invisible à l'oeil nu, elle trahit la réfraction dans le verre
    vec2 px = gl_FragCoord.xy / uDpr;
    vec2 cell = abs(fract(px / 56.0) - 0.5) * 56.0;
    float line = 1.0 - smoothstep(0.0, 1.0, min(cell.x, cell.y));
    col = mix(col, uLine, line * 0.085);
    gl_FragColor = vec4(col, 1.0);
    #include <colorspace_fragment>
  }
`;

export type Glass = { dispose: () => void; highlight: (i: number) => void };

export type GlassOptions = {
  drops: DropInput[];
  /** État de SparkleQuiz relevé au build : teinte et battement de la goutte. */
  live: 'up' | 'down' | 'unknown';
  onDropHover?: (i: number) => void;
  onDropOpen?: (i: number, x: number, y: number) => void;
};

// Double battement, période 1,1 s
const beat = (t: number) => {
  const m = t % 1.1;
  return Math.exp(-((m - 0.1) ** 2) * 160) + 0.55 * Math.exp(-((m - 0.32) ** 2) * 160);
};

export function mountGlass(canvas: HTMLCanvasElement, sections: HTMLElement[], options: GlassOptions): Glass {
  const mobile = matchMedia('(max-width: 767px)').matches;
  const dpr = Math.min(devicePixelRatio, mobile ? 1.5 : 2);

  const renderer = new WebGLRenderer({ canvas, antialias: true, powerPreference: 'high-performance' });
  renderer.setPixelRatio(dpr);
  renderer.toneMapping = NeutralToneMapping;

  const scene = new Scene();
  const camera = new PerspectiveCamera(35, 1, 0.1, 50);
  camera.position.set(0, 0, 8);

  const pmrem = new PMREMGenerator(renderer);
  const env = pmrem.fromScene(new RoomEnvironment(), 0.03).texture;
  scene.environment = env;

  const css = getComputedStyle(document.documentElement);
  const token = (name: string, fallback: string) => new Color(css.getPropertyValue(name).trim() || fallback);

  // Fond opaque : c'est lui que le verre réfracte
  const backdropUniforms = {
    uRes: { value: new Vector2(1, 1) },
    uTime: { value: 0 },
    uMorph: { value: 0 },
    uDpr: { value: dpr },
    uBg: { value: token('--color-bg', '#f2f2ee') },
    uA: { value: new Color('#ffb48f') },
    uB: { value: new Color('#8fb3ff') },
    uC: { value: new Color('#d4b8ff') },
    uD: { value: new Color('#8ee3c8') },
    uLine: { value: token('--color-ink', '#111214') },
  };
  const backdrop = new Mesh(
    new PlaneGeometry(1, 1),
    new ShaderMaterial({
      uniforms: backdropUniforms,
      vertexShader: 'varying vec2 vUv; void main() { vUv = uv; gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0); }',
      fragmentShader: backdropFrag,
      toneMapped: false,
      depthWrite: false,
    }),
  );
  backdrop.position.z = -6;
  backdrop.renderOrder = -1;
  scene.add(backdrop);
  // Les échantillons de réfraction hors du fond retombent sur la couleur de la page
  renderer.setClearColor(backdropUniforms.uBg.value, 1);

  // Sphère indexée : les sommets partagés gardent la surface lisse pendant la déformation
  let geometry = new IcosahedronGeometry(1, mobile ? 40 : 72);
  geometry.deleteAttribute('normal');
  geometry.deleteAttribute('uv');
  geometry = mergeVertices(geometry) as IcosahedronGeometry;
  geometry.setAttribute('normal', new BufferAttribute((geometry.getAttribute('position').array as Float32Array).slice(), 3));

  const uniforms = {
    uTime: { value: 0 },
    uMorph: { value: 0 },
    uMouseDir: { value: new Vector3(0, 0, 1) },
    uHover: { value: 0 },
  };

  const material = new MeshPhysicalMaterial({
    color: 0xffffff,
    roughness: 0.03,
    metalness: 0,
    transmission: 1,
    thickness: 1.3,
    ior: 1.55,
    dispersion: 6,
    iridescence: 0.55,
    iridescenceIOR: 1.35,
    iridescenceThicknessRange: [120, 720],
    clearcoat: 1,
    clearcoatRoughness: 0.04,
    envMapIntensity: 1.6,
  });
  material.onBeforeCompile = (shader) => {
    Object.assign(shader.uniforms, uniforms);
    shader.vertexShader = shader.vertexShader
      .replace('#include <common>', `#include <common>\n${noise}\n${shapes}`)
      .replace(
        '#include <beginnormal_vertex>',
        /* glsl */ `
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
        `,
      )
      .replace('#include <begin_vertex>', 'vec3 transformed = dp;');
    // Dans les plis, la normale lissée peut tourner le dos à la caméra : on la redresse
    shader.fragmentShader = shader.fragmentShader.replace(
      '#include <normal_fragment_begin>',
      /* glsl */ `#include <normal_fragment_begin>
      vec3 toEye = normalize(vViewPosition);
      float facing = dot(normal, toEye);
      if (facing < 0.08) normal = normalize(normal + toEye * (0.08 - facing));
      nonPerturbedNormal = normal;`,
    );
  };

  const blob = new Mesh(geometry, material);
  scene.add(blob);

  const drops = createDrops(options.drops, mobile);
  scene.add(drops.group);
  const white = new Color('#ffffff');
  const liveTint = new Color(options.live === 'down' ? '#ffb8a3' : '#c2f5d9');

  const pointer = { x: 0, y: 0, on: false };
  let lastHover = -1;
  const onMove = (e: PointerEvent) => {
    pointer.x = (e.clientX / innerWidth) * 2 - 1;
    pointer.y = -(e.clientY / innerHeight) * 2 + 1;
    pointer.on = e.pointerType === 'mouse';
    if (!pointer.on) return;
    // Une goutte sous un lien ou un bouton laisse la priorité au HTML
    const overUi = e.target instanceof Element && !!e.target.closest('a, button');
    if (overUi) drops.clearPointer();
    else drops.pointerAt(e.clientX, e.clientY, camera);
    if (drops.hovered !== lastHover) {
      lastHover = drops.hovered;
      document.documentElement.toggleAttribute('data-drop-hover', lastHover >= 0);
      options.onDropHover?.(lastHover);
    }
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
  addEventListener('click', onClick);
  document.addEventListener('pointerleave', onLeave);

  const halfH = Math.tan((camera.fov * Math.PI) / 360) * camera.position.z;
  const resize = () => {
    const w = innerWidth;
    const h = innerHeight;
    renderer.setSize(w, h, false);
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    // Le fond couvre exactement le cadre de la caméra à sa profondeur
    const bh = 2 * Math.tan((camera.fov * Math.PI) / 360) * (camera.position.z - backdrop.position.z);
    backdrop.scale.set(bh * camera.aspect, bh, 1);
    backdropUniforms.uRes.value.set(w, h);
  };
  resize();
  addEventListener('resize', resize);

  // Position continue dans la liste des sections : 2.4 = entre la 3e et la 4e
  const target = () => {
    const mid = innerHeight * 0.55;
    let value = 0;
    for (let i = 0; i < sections.length; i++) {
      const r = sections[i].getBoundingClientRect();
      if (r.top > mid) break;
      const t = Math.min(1, (mid - r.top) / Math.max(r.height, 1));
      value = i + (i < sections.length - 1 ? Math.max(0, (t - 0.6) / 0.4) : 0);
    }
    return Math.min(value, LAYOUT.length - 1);
  };

  const timer = new Timer();
  timer.connect(document);
  let morph = target();
  let hover = 0;
  let intro = 0;
  const inverse = new Quaternion();
  const toMouse = new Vector3();

  renderer.setAnimationLoop((t) => {
    timer.update(t);
    // Le premier delta peut être négatif (horodatage rAF antérieur au Timer)
    const dt = Math.max(0, Math.min(timer.getDelta(), 0.05));
    const time = timer.getElapsed();

    morph += (target() - morph) * (1 - Math.exp(-dt * 2.6));
    intro = Math.min(1, intro + dt * 0.7);
    const grow = 1 - Math.pow(1 - intro, 4);

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
    material.attenuationColor.copy(white).lerp(liveTint, w1);
    material.attenuationDistance = 2.2 + (1 - w1) * 40;

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
    backdropUniforms.uTime.value = time;
    backdropUniforms.uMorph.value = morph;

    renderer.render(scene, camera);
  });

  return {
    highlight: (i) => drops.highlight(i),
    dispose() {
      renderer.setAnimationLoop(null);
      removeEventListener('pointermove', onMove);
      removeEventListener('click', onClick);
      drops.dispose();
      removeEventListener('resize', resize);
      document.removeEventListener('pointerleave', onLeave);
      timer.dispose();
      geometry.dispose();
      material.dispose();
      env.dispose();
      pmrem.dispose();
      renderer.dispose();
    },
  };
}
