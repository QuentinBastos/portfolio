import type { ImageMetadata } from 'astro';
import type { T } from '../i18n';
import sqCover from '../assets/projects/sparklequiz/background_sparklequiz.webp';
import sqCoverEn from '../assets/projects/sparklequiz/background_sparklequiz_en.webp';
import charlotteCover from '../assets/projects/charlotte/background_charlotte.webp';
import charlotteGallery from '../assets/projects/charlotte/screen_gallery.webp';
import charlottePricing from '../assets/projects/charlotte/screen_pricing.webp';
import charlotteCommissions from '../assets/projects/charlotte/screen_commissions.webp';
import aloasCover from '../assets/projects/aloas/background_aloas.webp';
import iotCover from '../assets/projects/iot/background_iot.webp';
import iotCoverEn from '../assets/projects/iot/background_iot_en.webp';
import chessCover from '../assets/projects/chess/background_chess.webp';
import spotifyCover from '../assets/projects/spotify/background_spotify.webp';
import phase10Cover from '../assets/projects/phase10/background_phase10.webp';
import bookCover from '../assets/projects/interactive-book/background_interactive_book.webp';

export type Section = { title: T; body: T[] };

export type Project = {
  slug: string;
  name: string;
  tagline: T;
  summary: T;
  context: T;
  stack: string[];
  year: string;
  links: { label: T; href: string }[];
  stats?: { value: string; label: T }[];
  sections?: Section[];
  role?: T;
  highlights?: T[];
  cover?: { fr: ImageMetadata; en?: ImageMetadata; alt: T };
  screens?: { src: ImageMetadata; caption: T }[];
};

export const sparklequiz: Project = {
  slug: 'sparklequiz',
  name: 'SparkleQuiz',
  year: '2025',
  tagline: {
    fr: 'Application de quiz en solo et en multijoueur, en production sur le web, Android et iOS.',
    en: 'Solo and multiplayer quiz app, in production on the web, Android and iOS.',
  },
  summary: {
    fr: "Conçue, développée et exploitée seul : API Symfony, interface Vue 3, applis mobiles Capacitor, parties en temps réel, classements et quiz créés par les joueurs.",
    en: 'Designed, built and operated on my own: Symfony API, Vue 3 front end, Capacitor mobile apps, real-time matches, leaderboards and player-made quizzes.',
  },
  context: { fr: 'Projet personnel, mené seul', en: 'Personal project, built solo' },
  cover: { fr: sqCover, en: sqCoverEn, alt: { fr: 'Visuel de SparkleQuiz', en: 'SparkleQuiz artwork' } },
  role: {
    fr: 'Seul développeur : conception, back-end, front-end, applis mobiles, infrastructure et publication sur les stores.',
    en: 'Sole developer: design, back end, front end, mobile apps, infrastructure and store releases.',
  },
  highlights: [
    {
      fr: 'Progression complète : niveaux, expérience, quêtes quotidiennes, 68 trophées et 4 classements synchronisés avec Game Center.',
      en: 'Full progression system: levels, XP, daily quests, 68 trophies and 4 leaderboards synced with Game Center.',
    },
    {
      fr: 'Huit pipelines GitHub Actions : tests, déploiement Docker en production, publication sur les stores, mise à jour des fiches.',
      en: 'Eight GitHub Actions pipelines: tests, Docker production deploys, store publishing, store listing updates.',
    },
    {
      fr: 'Tests de bout en bout avec Playwright sur le web et Maestro sur mobile, audits Lighthouse.',
      en: 'End-to-end tests with Playwright on the web and Maestro on mobile, Lighthouse audits.',
    },
  ],
  stack: ['Symfony 7', 'PHP 8.2', 'Doctrine', 'MariaDB', 'Redis', 'Mercure', 'Vue 3', 'TypeScript', 'Pinia', 'Tailwind', 'Capacitor', 'Caddy', 'GitHub Actions'],
  links: [
    { label: { fr: 'sparklequiz.com', en: 'sparklequiz.com' }, href: 'https://sparklequiz.com' },
    { label: { fr: 'Google Play', en: 'Google Play' }, href: 'https://play.google.com/store/apps/details?id=com.sparklequiz.app' },
    { label: { fr: 'App Store', en: 'App Store' }, href: 'https://apps.apple.com/app/id6775843232' },
  ],
  stats: [
    { value: '3', label: { fr: 'plateformes : web, Android, iOS', en: 'platforms: web, Android, iOS' } },
    { value: '210+', label: { fr: 'versions publiées', en: 'releases shipped' } },
    { value: '~6 000', label: { fr: 'tests PHPUnit', en: 'PHPUnit tests' } },
    { value: '0', label: { fr: 'coupure à chaque déploiement', en: 'downtime per deploy' } },
  ],
  sections: [
    {
      title: { fr: 'Le point de départ', en: 'Starting point' },
      body: [
        {
          fr: "Je voulais un projet qui m'oblige à tout faire comme en entreprise, mais sans filet : concevoir le produit, l'architecture, la base, le front, les applis mobiles, puis le faire tourner en production et le maintenir.",
          en: 'I wanted a project that forced me to do everything a company does, without a safety net: product, architecture, database, front end, mobile apps, then run it in production and keep it alive.',
        },
      ],
    },
    {
      title: { fr: 'Architecture', en: 'Architecture' },
      body: [
        {
          fr: "Une API Symfony 7 sur MariaDB sert à la fois le site et les applis. Le front Vue 3 en TypeScript est le même code partout : Capacitor l'emballe pour Android et iOS. Redis sert de cache et de file de messages, Mercure pousse les événements en temps réel.",
          en: 'A Symfony 7 API on MariaDB serves both the website and the apps. The Vue 3 TypeScript front end is the same code everywhere: Capacitor wraps it for Android and iOS. Redis handles caching and the message queue, Mercure pushes real-time events.',
        },
        {
          fr: "Choix assumé : un monolithe bien découpé plutôt que des microservices. Pour une personne, c'est ce qui se déploie, se teste et se débogue le plus vite.",
          en: 'A deliberate choice: a well-structured monolith rather than microservices. For a team of one, it is the fastest thing to deploy, test and debug.',
        },
      ],
    },
    {
      title: { fr: 'Temps réel', en: 'Real time' },
      body: [
        {
          fr: "Les parties multijoueur passent par Mercure (Server-Sent Events) plutôt que par des WebSockets maison : moins de code serveur, reconnexion gérée par le navigateur, et l'autorisation des canaux reste dans Symfony.",
          en: 'Multiplayer matches run on Mercure (Server-Sent Events) rather than custom WebSockets: less server code, reconnection handled by the browser, and channel authorization stays in Symfony.',
        },
      ],
    },
    {
      title: { fr: 'Qualité et CI', en: 'Quality and CI' },
      body: [
        {
          fr: "Chaque changement passe par la même porte : PHPStan, PHP-CS-Fixer, PHPUnit, lint et vérification de types du front, Vitest, contrôle de parité des traductions et budget CSS. Playwright rejoue les parcours critiques chaque nuit.",
          en: 'Every change goes through the same gate: PHPStan, PHP-CS-Fixer, PHPUnit, front-end lint and type checks, Vitest, translation parity and a CSS budget. Playwright replays critical journeys every night.',
        },
        {
          fr: "Côté API, une règle simple : toute erreur prévisible renvoie un 4xx clair, un 5xx signale un vrai bug et remonte dans le monitoring.",
          en: 'On the API side, one simple rule: every predictable error returns a clear 4xx, a 5xx means a real bug and reaches monitoring.',
        },
      ],
    },
    {
      title: { fr: 'Déploiement', en: 'Deployment' },
      body: [
        {
          fr: "Un push sur main déploie le site sur mon serveur par GitHub Actions, en blue/green derrière Caddy : la nouvelle version démarre à côté de l'ancienne et ne reçoit le trafic qu'une fois saine. Un tag de version publie l'appli sur Google Play et la soumet à Apple. Les correctifs urgents partent en mise à jour à chaud, sans repasser par les stores.",
          en: 'A push to main deploys the site to my server through GitHub Actions, blue/green behind Caddy: the new version boots next to the old one and only takes traffic once healthy. A version tag publishes the app to Google Play and submits it to Apple. Urgent fixes ship as live updates, without going through the stores.',
        },
      ],
    },
    {
      title: { fr: "Ce que ça m'a appris", en: 'What it taught me' },
      body: [
        {
          fr: "Le plus dur n'est pas d'écrire la fonctionnalité, c'est de la faire tenir en production : migrations sans coupure, compatibilité entre versions d'applis encore installées, performances sur des téléphones d'entrée de gamme, et des tests assez fiables pour livrer souvent sans stress.",
          en: 'The hard part is not writing the feature, it is keeping it standing in production: zero-downtime migrations, compatibility with older app versions still installed, performance on low-end phones, and tests reliable enough to ship often without fear.',
        },
      ],
    },
  ],
};

export const effetB: Project = {
  slug: 'effet-b',
  name: 'Effet B',
  year: '2024',
  tagline: {
    fr: "Trois ERP web en production, dans une agence d'une vingtaine de personnes.",
    en: 'Three production web ERPs, at a web agency of about twenty people.',
  },
  summary: {
    fr: "Effet B développe des applications métier sur mesure, la plupart sur un CMS interne partagé par plus de 20 projets. J'y travaille depuis 2024, en alternance depuis 2025, sur des ERP en Symfony et sur des projets PHP repris d'autres équipes.",
    en: 'Effet B builds custom business applications, most of them on an in-house CMS shared by more than 20 projects. I have worked there since 2024, as an apprentice engineer since 2025, on Symfony ERPs and on PHP projects taken over from other teams.',
  },
  context: { fr: 'Alternance, développeur PHP / Symfony', en: 'Work-study, PHP / Symfony developer' },
  stack: ['PHP', 'Symfony', 'Doctrine', 'Twig', 'Messenger', 'MySQL', 'Docker', 'GitLab CI/CD', 'Sentry'],
  links: [],
  stats: [
    { value: '3', label: { fr: 'ERP en production', en: 'ERPs in production' } },
    { value: '20+', label: { fr: 'projets sur le CMS interne', en: 'projects on the in-house CMS' } },
    { value: '3 000+', label: { fr: 'commits sur le plus gros ERP', en: 'commits on the largest ERP' } },
    { value: '2024', label: { fr: 'en poste depuis', en: 'on the team since' } },
  ],
  sections: [
    {
      title: { fr: 'ERP e-commerce : refonte des documents commerciaux', en: 'E-commerce ERP: rebuilding the sales documents' },
      body: [
        {
          fr: "ERP e-commerce de pièces détachées, sur Symfony et le CMS interne. Les devis, commandes, bons de livraison et factures étaient peu reliés entre eux. J'ai restructuré la base pour que chaque ligne d'un devis se retrouve dans la commande, puis la livraison, puis la facture, avec une traçabilité complète.",
          en: 'E-commerce ERP selling spare parts, on Symfony and the in-house CMS. Quotes, orders, delivery notes and invoices were loosely linked. I restructured the database so every quote line flows into the order, the delivery note and the invoice, with full traceability.',
        },
        {
          fr: "Le plus délicat : migrer tous les documents existants sans casser la facturation en production. Migration progressive, scripts dédiés, tests sur des copies de données réelles.",
          en: 'The hard part: migrating every existing document without breaking billing in production. Gradual rollout, dedicated scripts, tests on copies of real data.',
        },
        {
          fr: "Aussi livré : fiche client créée automatiquement depuis une demande de devis, bons de commande fournisseurs, saisie d'adresse assistée, tableau de bord statistiques, retours d'inventaire.",
          en: 'Also shipped: automatic customer records from quote requests, supplier purchase orders, assisted address entry, a statistics dashboard, inventory returns.',
        },
      ],
    },
    {
      title: { fr: 'ERP automobile : coffre-fort numérique par API', en: 'Automotive ERP: digital vault through an API' },
      body: [
        {
          fr: "Un ERP qui digitalise les concessions automobiles, notamment les dossiers d'immatriculation. Ma mission : y brancher un coffre-fort numérique certifié, fourni par un prestataire externe, pour que chaque concession archive ses documents de façon conforme.",
          en: 'An ERP that digitises car dealerships, including vehicle registration files. My task: plug in a certified digital vault from an external provider so each dealership archives its documents in a compliant way.',
        },
        {
          fr: "J'ai écrit le client API (authentification, envoi des documents), le provisionnement automatique d'un coffre par concession, les dépôts manuels et automatiques, et la réception des webhooks qui synchronisent l'état des dépôts. Côté sécurité : validation des clés AES-256, assainissement des données, gestion des cas limites.",
          en: 'I wrote the API client (authentication, document upload), automatic provisioning of one vault per dealership, manual and automatic uploads, and the webhooks that sync upload status back. On security: AES-256 key validation, input sanitisation, edge-case handling.',
        },
      ],
    },
    {
      title: { fr: 'ERP de maintenance : reprise de code legacy', en: 'Maintenance ERP: taking over legacy code' },
      body: [
        {
          fr: "ERP de maintenance repris par l'agence, sans documentation. J'ai refondu tout le module client : fiche en quatre onglets, tables d'administration, matrices tarifaires par type de contrat avec import et export Excel, archivage des clients avec historique. Mon plus gros volume de code de l'année, fait en binôme avec un développeur senior.",
          en: 'Maintenance ERP taken over by the agency, with no documentation. I rebuilt the whole customer module: a four-tab record, admin tables, pricing matrices per contract type with Excel import and export, customer archiving with history. My largest body of code that year, paired with a senior developer.',
        },
      ],
    },
    {
      title: { fr: 'Ce que ça apporte à une équipe', en: 'What it brings to a team' },
      body: [
        {
          fr: "Lire et reprendre du code que je n'ai pas écrit, livrer sur des bases de production qui facturent de vrais clients, intégrer une API tierce proprement, et corriger les bugs remontés par Sentry. C'est le quotidien d'une équipe produit, et c'est ce que je fais depuis deux ans.",
          en: 'Reading and taking over code I did not write, shipping on production databases that bill real customers, integrating a third-party API cleanly, and fixing bugs reported by Sentry. That is the daily work of a product team, and it is what I have done for two years.',
        },
      ],
    },
  ],
};

const others: Project[] = [
  {
    slug: 'charlotte',
    name: 'Charlotte Bastos',
    year: '2026',
    tagline: {
      fr: "Site vitrine et boutique d'une illustratrice indépendante, entièrement modifiable depuis un CMS.",
      en: 'Portfolio and online shop for an independent illustrator, fully editable from a CMS.',
    },
    summary: {
      fr: "Galeries d'illustrations, d'animations et de graphisme, grille tarifaire interactive, formulaire de commande, boutique en ligne et pages légales, en quatre langues. Tout le contenu se modifie depuis un espace d'administration, sans toucher au code.",
      en: 'Illustration, animation and graphic design galleries, an interactive pricing grid, a commission form, an online shop and legal pages, in four languages. All content is edited from an admin studio, without touching the code.',
    },
    context: { fr: 'Projet réalisé seul, pour une illustratrice', en: 'Built solo, for an illustrator' },
    role: {
      fr: 'Conception et développement de bout en bout : front-end, back-end, CMS, paiement et déploiement.',
      en: 'Designed and built end to end: front end, back end, CMS, payments and deployment.',
    },
    highlights: [
      {
        fr: 'Nuxt 3 et Tailwind : galeries pré-rendues, rendu serveur pour le reste, animations GSAP.',
        en: 'Nuxt 3 and Tailwind: prerendered galleries, server-side rendering for the rest, GSAP animations.',
      },
      {
        fr: 'CMS headless Sanity : 16 schémas sur mesure aux champs traduits, pour publier sans développeur.',
        en: 'Sanity headless CMS: 16 custom schemas with translated fields, so content ships without a developer.',
      },
      {
        fr: 'Panier et paiement Stripe Checkout ; un webhook confirme chaque commande et prévient par e-mail via Resend.',
        en: 'Cart and Stripe Checkout payments; a webhook confirms each order and sends an email through Resend.',
      },
      {
        fr: 'Grille tarifaire qui calcule le prix selon le cadrage, le rendu et les suppléments.',
        en: 'Pricing grid that computes the price from framing, rendering level and extras.',
      },
      {
        fr: "Français, anglais, espagnol et allemand avec Nuxt i18n, 20 routes d'API côté serveur.",
        en: 'French, English, Spanish and German with Nuxt i18n, 20 server API routes.',
      },
    ],
    stack: ['Nuxt 3', 'Vue 3', 'TypeScript', 'Tailwind', 'Sanity', 'Stripe', 'Resend', 'GSAP'],
    links: [],
    cover: { fr: charlotteCover, alt: { fr: "Page d'accueil du site", en: 'Site home page' } },
    screens: [
      { src: charlotteGallery, caption: { fr: "Galerie d'illustrations", en: 'Illustration gallery' } },
      { src: charlottePricing, caption: { fr: 'Grille tarifaire interactive', en: 'Interactive pricing grid' } },
      { src: charlotteCommissions, caption: { fr: 'Formulaire de commande', en: 'Commission form' } },
    ],
  },
  {
    slug: 'aloas',
    name: 'ALOAS',
    year: '2025',
    tagline: {
      fr: 'Gestion de tournois sportifs pour une association, utilisée lors de vrais tournois.',
      en: 'Sports tournament management for a non-profit, used at real tournaments.',
    },
    summary: {
      fr: "ALOAS aide une association à organiser des tournois pour des personnes en situation de handicap : inscriptions, planification, chronomètre, scores et suivi des résultats. Le site a servi lors de vrais événements.",
      en: 'ALOAS helps a non-profit run tournaments for people with disabilities: registration, scheduling, timer, scoring and results. The site was used at real events.',
    },
    context: { fr: "Projet d'équipe, IUT", en: 'Team project, IUT' },
    role: {
      fr: 'Chef de projet et développeur full-stack, responsable de la mise en production.',
      en: 'Project lead and full-stack developer, in charge of the production release.',
    },
    highlights: [
      { fr: 'Front-end et back-end avec Symfony, Twig et Tailwind.', en: 'Front end and back end with Symfony, Twig and Tailwind.' },
      { fr: "Pilotage du projet et coordination de l'équipe jusqu'à la livraison.", en: 'Led the project and coordinated the team through delivery.' },
      {
        fr: 'Mise en production : conteneur Docker, déploiement automatisé avec GitLab CI/CD.',
        en: 'Production release: Docker container, automated deployment with GitLab CI/CD.',
      },
    ],
    stack: ['Symfony', 'Twig', 'Tailwind', 'MySQL', 'Docker', 'GitLab CI/CD'],
    links: [
      { label: { fr: 'Code sur GitHub', en: 'Code on GitHub' }, href: 'https://github.com/QuentinBastos/ALOAS' },
    ],
    cover: { fr: aloasCover, alt: { fr: 'Liste des tournois', en: 'Tournament list' } },
  },
  {
    slug: 'iot',
    name: 'IoT micro:bit',
    year: '2026',
    tagline: {
      fr: 'Architecture IoT de bout en bout : capteurs, radio chiffrée, serveur et appli Android.',
      en: 'End-to-end IoT architecture: sensors, encrypted radio, server and Android app.',
    },
    summary: {
      fr: "Un micro:bit relève température, humidité, pression et luminosité et les envoie par radio à une passerelle, qui les relaie à un serveur Python. Une appli Android affiche les mesures et règle à distance l'affichage d'un écran OLED.",
      en: 'A micro:bit reads temperature, humidity, pressure and light and sends them over radio to a gateway, which relays them to a Python server. An Android app shows the readings and remotely sets what an OLED screen displays.',
    },
    context: { fr: "Projet d'équipe (4), CPE Lyon", en: 'Team project (4), CPE Lyon' },
    role: {
      fr: "Appli Android, protocole d'échange avec le serveur et sécurité.",
      en: 'Android app, protocol with the server and security.',
    },
    highlights: [
      {
        fr: 'Appli Android en Java avec Material 3 : réception des mesures et envoi des commandes.',
        en: 'Android app in Java with Material 3: receiving readings and sending commands.',
      },
      { fr: "Protocole entre l'appli et le serveur, en UDP sur le Wi-Fi.", en: 'Protocol between the app and the server, over UDP on Wi-Fi.' },
      { fr: 'Chiffrement AES-128 de la liaison radio entre objet et passerelle.', en: 'AES-128 encryption of the radio link between device and gateway.' },
    ],
    stack: ['Java', 'Android', 'Python', 'SQLite', 'C++', 'micro:bit', 'UDP'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub' }, href: 'https://github.com/QuentinBastos/iot-project' }],
    cover: { fr: iotCover, en: iotCoverEn, alt: { fr: "Schéma de la chaîne IoT", en: 'IoT pipeline diagram' } },
  },
  {
    slug: 'chessjs',
    name: 'chessJS',
    year: '2024',
    tagline: {
      fr: "Jeu d'échecs complet en TypeScript, avec validation des coups.",
      en: 'A complete chess game in TypeScript, with move validation.',
    },
    summary: {
      fr: "Jeu d'échecs jouable à deux, qui valide chaque coup selon toutes les règles et conserve l'historique de la partie.",
      en: 'A two-player chess game that validates every move against the full rules and keeps the game history.',
    },
    context: { fr: "Projet d'équipe (2), IUT", en: 'Team project (2), IUT' },
    role: {
      fr: 'Développeur back-end, en binôme : moteur de jeu et validation des coups.',
      en: 'Back-end developer, in a pair: game engine and move validation.',
    },
    highlights: [
      {
        fr: "Conception du moteur de jeu : représentation de l'échiquier et génération des coups légaux.",
        en: 'Designed the game engine: board representation and legal move generation.',
      },
      { fr: "Implémentation de l'ensemble des règles et de l'historique de la partie.", en: 'Implemented the full set of rules and the game history.' },
    ],
    stack: ['TypeScript', 'Node.js', 'Vue 3', 'Tailwind'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub' }, href: 'https://github.com/QuentinBastos/chessJS' }],
    cover: { fr: chessCover, alt: { fr: 'Partie en cours sur chessJS', en: 'A game in progress on chessJS' } },
  },
  {
    slug: 'spotify',
    name: 'SpotifySong',
    year: '2024',
    tagline: {
      fr: "Recherche et écoute de morceaux via l'API Spotify, avec bibliothèque et playlists.",
      en: 'Search and play tracks through the Spotify API, with a library and playlists.',
    },
    summary: {
      fr: "Rechercher des morceaux par titre, artiste ou album, les écouter et les ranger en playlists, à partir des données de l'API Spotify. Comptes utilisateurs et favoris.",
      en: 'Search tracks by title, artist or album, play them and organise them into playlists, using data from the Spotify API. User accounts and favourites.',
    },
    context: { fr: 'Projet personnel, mené seul', en: 'Personal project, built solo' },
    role: { fr: 'Projet réalisé seul, de bout en bout.', en: 'Built on my own, end to end.' },
    highlights: [
      {
        fr: "Intégration de l'API Spotify pour la recherche de morceaux et la récupération de leurs métadonnées.",
        en: 'Integrated the Spotify API for track search and metadata retrieval.',
      },
      { fr: 'Persistance des bibliothèques et des playlists des utilisateurs en MySQL.', en: 'Stored user libraries and playlists in MySQL.' },
    ],
    stack: ['Symfony', 'Twig', 'Bootstrap', 'Sass', 'Spotify API', 'MySQL'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub' }, href: 'https://github.com/QuentinBastos/Spotify' }],
    cover: { fr: spotifyCover, alt: { fr: 'Recherche de morceaux sur SpotifySong', en: 'Track search on SpotifySong' } },
  },
  {
    slug: 'phase10',
    name: 'Phase 10',
    year: '2023',
    tagline: {
      fr: 'Le jeu de cartes Phase 10, jouable à plusieurs en temps réel.',
      en: 'The Phase 10 card game, playable with others in real time.',
    },
    summary: {
      fr: 'Adaptation web du jeu de cartes Phase 10 : dix phases à compléter dans l’ordre, jouables à plusieurs en temps réel.',
      en: 'A web version of the Phase 10 card game: ten phases to complete in order, playable with others in real time.',
    },
    context: { fr: "Projet d'équipe (4), IUT", en: 'Team project (4), IUT' },
    role: { fr: "Développeur front-end, dans une équipe de quatre.", en: 'Front-end developer, in a team of four.' },
    highlights: [
      { fr: "Développement de l'interface de jeu en Angular.", en: 'Built the game interface in Angular.' },
      { fr: 'Synchronisation des parties en temps réel avec Socket.IO côté client.', en: 'Real-time game synchronisation with Socket.IO on the client side.' },
    ],
    stack: ['Angular', 'TypeScript', 'Node.js', 'Socket.IO'],
    links: [],
    cover: { fr: phase10Cover, alt: { fr: 'Table de jeu de Phase 10', en: 'Phase 10 game table' } },
  },
  {
    slug: 'livre-interactif',
    name: 'Livre interactif',
    year: '2024',
    tagline: {
      fr: 'Création et partage de livres interactifs, avec génération d’histoires par IA.',
      en: 'Create and share interactive books, with AI story generation.',
    },
    summary: {
      fr: "Écrire des récits, y ajouter textes, images et liens, puis les partager. Une fonction de génération s'appuie sur l'API OpenAI pour écrire une histoire à partir de quelques mots.",
      en: 'Write stories, add text, images and links, then share them. A generation feature relies on the OpenAI API to write a story from a few words.',
    },
    context: { fr: "Projet d'équipe (2), IUT", en: 'Team project (2), IUT' },
    role: { fr: 'Développeur back-end, en binôme.', en: 'Back-end developer, in a pair.' },
    highlights: [
      { fr: 'Back-end Symfony : modélisation des livres, de leurs pages et de leurs liens.', en: 'Symfony back end: data model for books, their pages and their links.' },
      { fr: "Intégration de l'API OpenAI pour générer des histoires à partir d'une consigne courte.", en: 'Integrated the OpenAI API to generate stories from a short prompt.' },
      { fr: "Conteneurisation de l'application avec Docker.", en: 'Containerised the application with Docker.' },
    ],
    stack: ['Symfony', 'Twig', 'Tailwind', 'Sass', 'OpenAI API', 'Docker'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub' }, href: 'https://github.com/QuentinBastos/InteractiveBook' }],
    cover: { fr: bookCover, alt: { fr: "Page d'un livre interactif", en: 'An interactive book page' } },
  },
];

/** Ordre d'affichage des autres projets. */
const order = ['charlotte', 'chessjs', 'spotify', 'aloas', 'phase10', 'iot', 'livre-interactif'];
export const otherProjects: Project[] = order.map((slug) => others.find((p) => p.slug === slug)!);

/** Dépôts publics de cours, cités sans page dédiée. */
export const githubExtras: { name: string; note: T; href: string }[] = [
  { name: 'systeme-exploitation', note: { fr: 'Système, C', en: 'Operating systems, C' }, href: 'https://github.com/QuentinBastos/systeme-exploitation' },
  { name: 'microprocesseur', note: { fr: 'Microcontrôleur 8051, C et assembleur', en: '8051 microcontroller, C and assembly' }, href: 'https://github.com/QuentinBastos/microprocesseur' },
  { name: 'algo-a3', note: { fr: 'Algorithmique, Python', en: 'Algorithms, Python' }, href: 'https://github.com/QuentinBastos/algo-a3' },
  { name: 'api-library', note: { fr: 'API REST, TypeScript', en: 'REST API, TypeScript' }, href: 'https://github.com/QuentinBastos/api-library' },
];

/** Projets affichés comme tels (CV, cartes). */
export const projects = [sparklequiz, ...otherProjects];

/** Toutes les pages /projets/[slug], études de cas d'expérience comprises. */
export const allProjects = [sparklequiz, effetB, ...otherProjects];
