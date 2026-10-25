/**
 * État de SparkleQuiz relevé au build (le site est reconstruit toutes les heures).
 * Le dépôt est privé et /api/health n'expose pas de CORS : on interroge côté build,
 * jamais côté navigateur. Toute erreur réseau donne un état « inconnu », pas un échec de build.
 */
export type LiveStatus = {
  checkedAt: string;
  up: boolean | null;
  services: Record<string, string>;
  release: string | null;
};

const HEALTH_URL = 'https://sparklequiz.com/api/health';

let cached: Promise<LiveStatus> | null = null;

export function getLiveStatus(): Promise<LiveStatus> {
  cached ??= fetchStatus();
  return cached;
}

async function fetchStatus(): Promise<LiveStatus> {
  const checkedAt = new Date().toISOString();
  try {
    const res = await fetch(HEALTH_URL, { signal: AbortSignal.timeout(5000) });
    const body = (await res.json()) as Record<string, string>;
    return {
      checkedAt,
      up: res.ok,
      services: body,
      release: res.headers.get('x-app-release')?.slice(0, 7) ?? null,
    };
  } catch {
    return { checkedAt, up: null, services: {}, release: null };
  }
}
