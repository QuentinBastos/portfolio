<?php

namespace App\Portfolio;

/**
 * Source unique des projets affichés sur le portfolio.
 *
 * L'ordre du tableau est l'ordre d'affichage. Les textes vivent dans les
 * traductions, sous projects.<clé>.* ; ce fichier ne porte que les données
 * factuelles : cadre, stack, liens, visuels.
 */
final class ProjectCatalog
{
    private const PROJECTS = [
        [
            'slug' => 'sparklequiz',
            'key' => 'projects.sparklequiz',
            'featured' => true,
            'origin' => 'business',
            'year' => 'projects.sparklequiz.year',
            'team' => 1,
            'status' => 'live',
            'stack' => ['Symfony', 'Vue 3', 'TypeScript', 'MySQL', 'Mercure', 'Redis', 'Docker', 'Caddy', 'Capacitor', 'Tailwind', 'GitHub Actions'],
            'links' => [
                ['type' => 'site', 'url' => 'https://sparklequiz.fr'],
                ['type' => 'appstore', 'url' => 'https://apps.apple.com/app/id6775843232'],
                ['type' => 'playstore', 'url' => 'https://play.google.com/store/apps/details?id=com.sparklequiz.app'],
            ],
            'image' => 'assets/img/projects/sparklequiz/background_sparklequiz.webp',
            'image_en' => 'assets/img/projects/sparklequiz/background_sparklequiz_en.webp',
            'icon' => 'assets/img/projects/sparklequiz/icon_sparklequiz.webp',
            'video' => null,
            'screens' => [],
            'highlights' =>6,
        ],
        [
            // Déploiement Vercel retiré et dépôt privé : pas de lien public pour l'instant.
            'slug' => 'charlotte',
            'key' => 'projects.charlotte',
            'featured' => false,
            'origin' => 'client',
            'year' => '2026',
            'team' => 1,
            'status' => null,
            'stack' => ['Nuxt 3', 'Vue 3', 'TypeScript', 'Tailwind', 'Sanity', 'Stripe', 'Resend', 'GSAP', 'Vercel'],
            'links' => [],
            'image' => 'assets/img/projects/charlotte/background_charlotte.webp',
            'image_en' => 'assets/img/projects/charlotte/background_charlotte_en.webp',
            'icon' => 'assets/img/projects/charlotte/icon_charlotte.webp',
            'video' => null,
            'screens' => [
                // La capture d'accueil sert aussi d'image d'en-tête : pas de doublon.
                ['image' => 'assets/img/projects/charlotte/background_charlotte_en.webp', 'caption' => 'screen_home'],
                ['image' => 'assets/img/projects/charlotte/screen_gallery.webp', 'caption' => 'screen_gallery'],
                ['image' => 'assets/img/projects/charlotte/screen_pricing.webp', 'caption' => 'screen_pricing'],
                ['image' => 'assets/img/projects/charlotte/screen_commissions.webp', 'caption' => 'screen_commissions'],
            ],
            'highlights' =>5,
        ],
        [
            'slug' => 'aloas',
            'key' => 'projects.aloas',
            'featured' => false,
            'origin' => 'but',
            'year' => null,
            'team' => null,
            'status' => 'live',
            'stack' => ['Symfony', 'Twig', 'Tailwind', 'SASS', 'Docker', 'GitLab CI/CD'],
            'links' => [
                ['type' => 'site', 'url' => 'https://aloas-tournoi.com'],
                ['type' => 'github', 'url' => 'https://github.com/QuentinBastos/ALOAS'],
            ],
            'image' => 'assets/img/projects/aloas/background_aloas.webp',
            'image_en' => null,
            'icon' => 'assets/img/projects/aloas/icon_aloas.webp',
            'video' => null,
            'screens' => [],
            'highlights' =>3,
        ],
        [
            'slug' => 'iot',
            'key' => 'projects.iot',
            'featured' => false,
            'origin' => 'cpe',
            'year' => '2026',
            'team' => 4,
            'status' => null,
            'stack' => ['Java', 'Android', 'Material 3', 'Python', 'SQLite', 'C++', 'micro:bit', 'UDP'],
            'links' => [
                ['type' => 'github', 'url' => 'https://github.com/QuentinBastos/iot-project'],
            ],
            'image' => 'assets/img/projects/iot/background_iot.webp',
            'image_en' => 'assets/img/projects/iot/background_iot_en.webp',
            'icon' => 'assets/img/projects/iot/icon_iot.webp',
            'video' => null,
            'screens' => [],
            'highlights' =>3,
        ],
        [
            'slug' => 'interactive-book',
            'key' => 'projects.interactive_book',
            'featured' => false,
            'origin' => 'but',
            'year' => null,
            'team' => 2,
            'status' => null,
            'stack' => ['Symfony', 'Twig', 'Tailwind', 'SASS', 'OpenAI API', 'Docker'],
            'links' => [
                ['type' => 'github', 'url' => 'https://github.com/QuentinBastos/InteractiveBook'],
            ],
            'image' => 'assets/img/projects/interactive_book/background_interactive_book.webp',
            'image_en' => null,
            'icon' => 'assets/img/projects/interactive_book/icon_interactive_book.webp',
            'video' => 'assets/video/interactiveBook.mp4',
            'screens' => [],
            'highlights' =>3,
        ],
        [
            'slug' => 'chess',
            'key' => 'projects.chess',
            'featured' => false,
            'origin' => 'but',
            'year' => null,
            'team' => 2,
            'status' => null,
            'stack' => ['TypeScript', 'Node.js', 'Vue', 'Tailwind'],
            'links' => [
                ['type' => 'github', 'url' => 'https://github.com/QuentinBastos/chessJS'],
            ],
            'image' => 'assets/img/projects/chess/background_chess.webp',
            'image_en' => null,
            'icon' => 'assets/img/projects/chess/icon_chess.webp',
            'video' => 'assets/video/chess.mp4',
            'screens' => [],
            'highlights' =>2,
        ],
        [
            'slug' => 'spotify',
            'key' => 'projects.spotify',
            'featured' => false,
            'origin' => 'perso',
            'year' => null,
            'team' => 1,
            'status' => null,
            'stack' => ['Symfony', 'Twig', 'Bootstrap', 'SASS', 'Spotify API', 'MySQL'],
            'links' => [
                ['type' => 'github', 'url' => 'https://github.com/QuentinBastos/Spotify'],
            ],
            'image' => 'assets/img/projects/spotify/background_spotify.webp',
            'image_en' => null,
            'icon' => 'assets/img/projects/spotify/icon_spotify.webp',
            'video' => 'assets/video/spotify.mp4',
            'screens' => [],
            'highlights' =>2,
        ],
        [
            'slug' => 'phase10',
            'key' => 'projects.phase10',
            'featured' => false,
            'origin' => 'but',
            'year' => 'projects.phase10.year',
            'team' => 4,
            'status' => null,
            'stack' => ['Angular', 'TypeScript', 'Node.js', 'Socket.IO'],
            'links' => [
                ['type' => 'gitlab', 'url' => 'https://iutbg-gitlab.iutbourg.univ-lyon1.fr/2023-2024-sae-but2/phase-10'],
            ],
            'image' => 'assets/img/projects/phase10/background_phase10.webp',
            'image_en' => null,
            'icon' => 'assets/img/projects/phase10/icon_phase10.webp',
            'video' => null,
            'screens' => [],
            'highlights' =>2,
        ],
    ];

    /**
     * @return list<array<string, mixed>>
     */
    public function all(): array
    {
        return self::PROJECTS;
    }

    public function find(string $slug): ?array
    {
        $index = $this->indexOf($slug);

        return null === $index ? null : self::PROJECTS[$index];
    }

    public function previous(string $slug): ?array
    {
        $index = $this->indexOf($slug);

        return (null !== $index && $index > 0) ? self::PROJECTS[$index - 1] : null;
    }

    public function next(string $slug): ?array
    {
        $index = $this->indexOf($slug);

        return (null !== $index && $index < \count(self::PROJECTS) - 1) ? self::PROJECTS[$index + 1] : null;
    }

    private function indexOf(string $slug): ?int
    {
        foreach (self::PROJECTS as $index => $project) {
            if ($project['slug'] === $slug) {
                return $index;
            }
        }

        return null;
    }
}
