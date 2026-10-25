import {
  CanvasTexture,
  Group,
  Mesh,
  ShaderMaterial,
  SphereGeometry,
  SRGBColorSpace,
  Texture,
  TextureLoader,
  Vector2,
  Vector3,
  Raycaster,
  type PerspectiveCamera,
} from 'three';

/**
 * Une goutte de verre par projet. Chaque goutte est une lentille : la capture du
 * projet y est vue grossie au centre, comprimée sur les bords, avec une frange
 * de couleur et des reflets. Un shader dédié, plus net et bien moins coûteux
 * qu'une vraie transmission pour quatre objets.
 */

export type DropInput = { img: string | null; name: string };

// Positions autour du centre du groupe (unités du monde) et rayons
const SLOTS = [
  { x: -0.2, y: 0.7, r: 0.66 },
  { x: 0.95, y: 1.25, r: 0.5 },
  { x: 1.25, y: -0.05, r: 0.52 },
  { x: -0.15, y: -0.75, r: 0.5 },
  { x: 0.85, y: -1.25, r: 0.44 },
  { x: 2.0, y: 0.8, r: 0.4 },
  { x: 2.0, y: -0.95, r: 0.38 },
  { x: 0.05, y: 1.85, r: 0.34 },
];

const vertex = /* glsl */ `
  uniform float uTime;
  uniform float uSeed;
  varying vec3 vN;
  varying vec3 vV;
  void main() {
    vec3 p = position;
    float w = sin(p.x * 2.1 + uTime * 0.9 + uSeed) * sin(p.y * 1.7 - uTime * 0.7 + uSeed * 2.0) * 0.035;
    p += normal * w;
    vec4 mv = modelViewMatrix * vec4(p, 1.0);
    vN = normalize(normalMatrix * normal);
    vV = -mv.xyz;
    gl_Position = projectionMatrix * mv;
  }
`;

const fragment = /* glsl */ `
  uniform sampler2D uMap;
  uniform float uAspect;
  uniform float uOpacity;
  uniform float uFocus;
  uniform vec2 uShift;
  varying vec3 vN;
  varying vec3 vV;

  vec3 sampleMap(vec2 l) {
    vec2 uv = vec2(0.5 + l.x / max(uAspect, 1.0), 0.5 + l.y * min(uAspect, 1.0));
    return texture2D(uMap, clamp(uv, 0.001, 0.999)).rgb;
  }

  void main() {
    vec3 n = normalize(vN);
    vec3 v = normalize(vV);
    float facing = max(dot(n, v), 0.0);
    float fres = pow(1.0 - facing, 2.2);
    float r2 = dot(n.xy, n.xy);

    // Lentille : grossit au centre, ramasse le bord
    vec2 l = n.xy * (0.44 - 0.08 * uFocus + 0.2 * r2) + uShift;
    float ca = 0.018 * fres + 0.002;
    vec3 col = vec3(sampleMap(l + n.xy * ca).r, sampleMap(l).g, sampleMap(l - n.xy * ca).b);

    // Verre : voile clair au bord, frange irisée, deux reflets
    col = mix(col, vec3(0.97, 0.97, 0.99), fres * 0.62);
    vec3 irid = 0.5 + 0.5 * cos(6.2831 * (fres * 1.3 + vec3(0.0, 0.33, 0.67)));
    col += irid * fres * 0.16;
    vec3 l1 = normalize(vec3(-0.55, 0.65, 0.55));
    col += pow(max(dot(reflect(-l1, n), v), 0.0), 70.0) * 0.95;
    vec3 l2 = normalize(vec3(0.6, -0.5, 0.65));
    col += pow(max(dot(reflect(-l2, n), v), 0.0), 18.0) * 0.18;
    // Fin liseré lumineux
    col += smoothstep(0.82, 0.98, 1.0 - facing) * 0.25;

    gl_FragColor = vec4(col, uOpacity);
    #include <colorspace_fragment>
  }
`;

/** Projet sans capture : son nom sur un fond pastel, vu à travers le verre. */
function nameTexture(name: string): Texture {
  const c = document.createElement('canvas');
  c.width = c.height = 512;
  const g = c.getContext('2d')!;
  const grad = g.createLinearGradient(0, 0, 512, 512);
  grad.addColorStop(0, '#d4b8ff');
  grad.addColorStop(1, '#8ee3c8');
  g.fillStyle = grad;
  g.fillRect(0, 0, 512, 512);
  g.fillStyle = '#111214';
  g.font = '600 64px "Instrument Sans Variable", sans-serif';
  g.textAlign = 'center';
  g.textBaseline = 'middle';
  name.split('-').forEach((part, i, all) => g.fillText(part, 256, 256 + (i - (all.length - 1) / 2) * 72));
  const t = new CanvasTexture(c);
  t.colorSpace = SRGBColorSpace;
  return t;
}

export function createDrops(inputs: DropInput[], mobile: boolean, lite = false) {
  const group = new Group();
  const geometry = new SphereGeometry(1, mobile || lite ? 48 : 96, mobile || lite ? 32 : 64);
  const loader = new TextureLoader();
  const raycaster = new Raycaster();
  const ndc = new Vector2();

  const drops = inputs.slice(0, SLOTS.length).map((input, i) => {
    const material = new ShaderMaterial({
      vertexShader: vertex,
      fragmentShader: fragment,
      transparent: true,
      toneMapped: false,
      uniforms: {
        uMap: { value: null as Texture | null },
        uAspect: { value: 1 },
        uOpacity: { value: 0 },
        uFocus: { value: 0 },
        uTime: { value: 0 },
        uSeed: { value: i * 1.7 },
        uShift: { value: new Vector2() },
      },
    });
    const setMap = (t: Texture) => {
      t.colorSpace = SRGBColorSpace;
      material.uniforms.uMap.value = t;
      const img = t.image as { width: number; height: number };
      material.uniforms.uAspect.value = img.width / img.height;
    };
    if (input.img) loader.load(input.img, setMap);
    else setMap(nameTexture(input.name));
    const mesh = new Mesh(geometry, material);
    mesh.visible = false;
    mesh.userData.index = i;
    group.add(mesh);
    return { mesh, material, slot: SLOTS[i], focus: 0, push: { x: 0, y: 0 } };
  });

  let hovered = -1;
  let highlighted = -1;
  let weight = 0;

  return {
    group,
    get hovered() {
      return hovered;
    },
    /** Survol venu de la liste HTML des projets. */
    highlight(i: number) {
      highlighted = i;
    },
    /** Index de la goutte sous ce point de l'écran, ou -1. */
    hit(x: number, y: number, camera: PerspectiveCamera) {
      if (weight < 0.5) return -1;
      ndc.set((x / innerWidth) * 2 - 1, -(y / innerHeight) * 2 + 1);
      raycaster.setFromCamera(ndc, camera);
      const found = raycaster.intersectObjects(drops.map((d) => d.mesh), false)[0];
      return found ? (found.object.userData.index as number) : -1;
    },
    pointerAt(x: number, y: number, camera: PerspectiveCamera) {
      hovered = this.hit(x, y, camera);
    },
    clearPointer() {
      hovered = -1;
    },
    /** Centre d'une goutte en pixels, pour lancer la transition depuis elle. */
    screenOf(i: number, camera: PerspectiveCamera) {
      const p = drops[i].mesh.getWorldPosition(new Vector3()).project(camera);
      return { x: ((p.x + 1) / 2) * innerWidth, y: ((1 - p.y) / 2) * innerHeight };
    },
    /**
     * `w` : 0 hors de la section Projets, 1 dedans. `origin` : centre de la grande
     * goutte, d'où les petites sortent et où elles rentrent.
     */
    update(dt: number, time: number, w: number, origin: { x: number; y: number }, mouse: { x: number; y: number; on: boolean }, fit = 1) {
      weight = w;
      const active = hovered >= 0 ? hovered : highlighted;
      drops.forEach((d, i) => {
        // Sortie en cascade : chaque goutte a son propre retard
        const lag = 0.5 / drops.length;
        const local = Math.min(1, Math.max(0, (w - i * lag) / (1 - (drops.length - 1) * lag)));
        const e = 1 - Math.pow(1 - local, 3);
        const focusTarget = active === i ? 1 : 0;
        d.focus += (focusTarget - d.focus) * (1 - Math.exp(-dt * 8));

        // Les voisines s'écartent de la goutte active
        let px = 0;
        let py = 0;
        if (active >= 0 && active !== i) {
          const a = drops[active].slot;
          const dx = d.slot.x - a.x;
          const dy = d.slot.y - a.y;
          const len = Math.hypot(dx, dy) || 1;
          px = (dx / len) * 0.22;
          py = (dy / len) * 0.22;
        }
        d.push.x += (px - d.push.x) * (1 - Math.exp(-dt * 6));
        d.push.y += (py - d.push.y) * (1 - Math.exp(-dt * 6));

        const s = mobile ? 0.5 : fit;
        const tx = d.slot.x * s + d.push.x + (mouse.on ? mouse.x * 0.12 : 0) + Math.sin(time * 0.6 + i) * 0.05;
        const ty = d.slot.y * s * 0.85 - 0.1 + d.push.y + (mouse.on ? mouse.y * 0.08 : 0) + Math.cos(time * 0.5 + i * 1.3) * 0.06;
        d.mesh.position.set(origin.x + tx * e, origin.y + ty * e, 0.2 * d.focus);
        d.mesh.scale.setScalar(Math.max(0.0001, d.slot.r * s * e * (1 + 0.16 * d.focus)));
        d.mesh.rotation.y = time * 0.15 + i;
        d.mesh.visible = e > 0.001;

        const u = d.material.uniforms;
        u.uOpacity.value = Math.min(1, e * 1.4);
        u.uFocus.value = d.focus;
        u.uTime.value = time;
        u.uShift.value.set(mouse.on ? -mouse.x * 0.03 : 0, mouse.on ? -mouse.y * 0.03 : 0);
      });
    },
    dispose() {
      geometry.dispose();
      drops.forEach((d) => {
        d.material.uniforms.uMap.value?.dispose();
        d.material.dispose();
      });
    },
  };
}
