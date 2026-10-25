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
    de: 'Quiz-App für Einzel- und Mehrspieler, in Produktion im Web, auf Android und iOS.',
  },
  summary: {
    fr: "Conçue, développée et exploitée seul : API Symfony, interface Vue 3, applis mobiles Capacitor, parties en temps réel, classements et quiz créés par les joueurs.",
    en: 'Designed, built and operated on my own: Symfony API, Vue 3 front end, Capacitor mobile apps, real-time matches, leaderboards and player-made quizzes.',
    de: 'Allein konzipiert, entwickelt und betrieben: Symfony-API, Vue-3-Front-End, mobile Apps mit Capacitor, Echtzeit-Partien, Ranglisten und von Spielern erstellte Quiz.',
  },
  context: { fr: 'Projet personnel, mené seul', en: 'Personal project, built solo', de: 'Persönliches Projekt, allein umgesetzt' },
  cover: { fr: sqCover, en: sqCoverEn, alt: { fr: 'Visuel de SparkleQuiz', en: 'SparkleQuiz artwork', de: 'Visual von SparkleQuiz' } },
  role: {
    fr: 'Seul développeur : conception, back-end, front-end, applis mobiles, infrastructure et publication sur les stores.',
    en: 'Sole developer: design, back end, front end, mobile apps, infrastructure and store releases.',
    de: 'Einziger Entwickler: Konzeption, Back-End, Front-End, mobile Apps, Infrastruktur und Store-Veröffentlichungen.',
  },
  highlights: [
    {
      fr: 'Progression complète : niveaux, expérience, quêtes quotidiennes, 68 trophées et 4 classements synchronisés avec Game Center.',
      en: 'Full progression system: levels, XP, daily quests, 68 trophies and 4 leaderboards synced with Game Center.',
      de: 'Komplettes Fortschrittssystem: Level, Erfahrungspunkte, tägliche Aufgaben, 68 Trophäen und 4 mit Game Center synchronisierte Ranglisten.',
    },
    {
      fr: 'Huit pipelines GitHub Actions : tests, déploiement Docker en production, publication sur les stores, mise à jour des fiches.',
      en: 'Eight GitHub Actions pipelines: tests, Docker production deploys, store publishing, store listing updates.',
      de: 'Acht GitHub-Actions-Pipelines: Tests, Docker-Deployments in Produktion, Store-Veröffentlichung, Aktualisierung der Store-Einträge.',
    },
    {
      fr: 'Tests de bout en bout avec Playwright sur le web et Maestro sur mobile, audits Lighthouse.',
      en: 'End-to-end tests with Playwright on the web and Maestro on mobile, Lighthouse audits.',
      de: 'End-to-End-Tests mit Playwright im Web und Maestro auf Mobile, Lighthouse-Audits.',
    },
  ],
  stack: ['Symfony 7', 'PHP 8.2', 'Doctrine', 'MariaDB', 'Redis', 'Mercure', 'Vue 3', 'TypeScript', 'Pinia', 'Tailwind', 'Capacitor', 'Caddy', 'GitHub Actions'],
  links: [
    { label: { fr: 'sparklequiz.com', en: 'sparklequiz.com', de: 'sparklequiz.com' }, href: 'https://sparklequiz.com' },
    { label: { fr: 'Google Play', en: 'Google Play', de: 'Google Play' }, href: 'https://play.google.com/store/apps/details?id=com.sparklequiz.app' },
    { label: { fr: 'App Store', en: 'App Store', de: 'App Store' }, href: 'https://apps.apple.com/app/id6775843232' },
  ],
  stats: [
    { value: '3', label: { fr: 'plateformes : web, Android, iOS', en: 'platforms: web, Android, iOS', de: 'Plattformen: Web, Android, iOS' } },
    { value: '210+', label: { fr: 'versions publiées', en: 'releases shipped', de: 'veröffentlichte Versionen' } },
    { value: '~6 000', label: { fr: 'tests PHPUnit', en: 'PHPUnit tests', de: 'PHPUnit-Tests' } },
    { value: '0', label: { fr: 'coupure à chaque déploiement', en: 'downtime per deploy', de: 'Ausfallzeit pro Deployment' } },
  ],
  sections: [
    {
      title: { fr: 'Le point de départ', en: 'Starting point', de: 'Ausgangspunkt' },
      body: [
        {
          fr: "Je voulais un projet qui m'oblige à tout faire comme en entreprise, mais sans filet : concevoir le produit, l'architecture, la base, le front, les applis mobiles, puis le faire tourner en production et le maintenir.",
          en: 'I wanted a project that forced me to do everything a company does, without a safety net: product, architecture, database, front end, mobile apps, then run it in production and keep it alive.',
          de: 'Ich wollte ein Projekt, das mich zwingt, alles zu tun, was ein Unternehmen tut, ohne Sicherheitsnetz: Produkt, Architektur, Datenbank, Front-End, mobile Apps, und das Ganze dann in Produktion betreiben und am Leben halten.',
        },
      ],
    },
    {
      title: { fr: 'Architecture', en: 'Architecture', de: 'Architektur' },
      body: [
        {
          fr: "Une API Symfony 7 sur MariaDB sert à la fois le site et les applis. Le front Vue 3 en TypeScript est le même code partout : Capacitor l'emballe pour Android et iOS. Redis sert de cache et de file de messages, Mercure pousse les événements en temps réel.",
          en: 'A Symfony 7 API on MariaDB serves both the website and the apps. The Vue 3 TypeScript front end is the same code everywhere: Capacitor wraps it for Android and iOS. Redis handles caching and the message queue, Mercure pushes real-time events.',
          de: 'Eine Symfony-7-API auf MariaDB bedient die Website und die Apps. Das Front-End in Vue 3 und TypeScript ist überall derselbe Code: Capacitor verpackt es für Android und iOS. Redis übernimmt Cache und Nachrichtenwarteschlange, Mercure verteilt die Echtzeit-Ereignisse.',
        },
        {
          fr: "Choix assumé : un monolithe bien découpé plutôt que des microservices. Pour une personne, c'est ce qui se déploie, se teste et se débogue le plus vite.",
          en: 'A deliberate choice: a well-structured monolith rather than microservices. For a team of one, it is the fastest thing to deploy, test and debug.',
          de: 'Eine bewusste Entscheidung: ein gut strukturierter Monolith statt Microservices. Für ein Ein-Personen-Team lässt er sich am schnellsten ausliefern, testen und debuggen.',
        },
      ],
    },
    {
      title: { fr: 'Temps réel', en: 'Real time', de: 'Echtzeit' },
      body: [
        {
          fr: "Les parties multijoueur passent par Mercure (Server-Sent Events) plutôt que par des WebSockets maison : moins de code serveur, reconnexion gérée par le navigateur, et l'autorisation des canaux reste dans Symfony.",
          en: 'Multiplayer matches run on Mercure (Server-Sent Events) rather than custom WebSockets: less server code, reconnection handled by the browser, and channel authorization stays in Symfony.',
          de: 'Mehrspieler-Partien laufen über Mercure (Server-Sent Events) statt über eigene WebSockets: weniger Servercode, die Wiederverbindung übernimmt der Browser, und die Berechtigungen der Kanäle bleiben in Symfony.',
        },
      ],
    },
    {
      title: { fr: 'Qualité et CI', en: 'Quality and CI', de: 'Qualität und CI' },
      body: [
        {
          fr: "Chaque changement passe par la même porte : PHPStan, PHP-CS-Fixer, PHPUnit, lint et vérification de types du front, Vitest, contrôle de parité des traductions et budget CSS. Playwright rejoue les parcours critiques chaque nuit.",
          en: 'Every change goes through the same gate: PHPStan, PHP-CS-Fixer, PHPUnit, front-end lint and type checks, Vitest, translation parity and a CSS budget. Playwright replays critical journeys every night.',
          de: 'Jede Änderung durchläuft dieselbe Prüfung: PHPStan, PHP-CS-Fixer, PHPUnit, Lint und Typprüfung im Front-End, Vitest, Vollständigkeit der Übersetzungen und ein CSS-Budget. Playwright spielt jede Nacht die kritischen Abläufe durch.',
        },
        {
          fr: "Côté API, une règle simple : toute erreur prévisible renvoie un 4xx clair, un 5xx signale un vrai bug et remonte dans le monitoring.",
          en: 'On the API side, one simple rule: every predictable error returns a clear 4xx, a 5xx means a real bug and reaches monitoring.',
          de: 'In der API gilt eine einfache Regel: Jeder vorhersehbare Fehler liefert ein klares 4xx, ein 5xx bedeutet einen echten Bug und landet im Monitoring.',
        },
      ],
    },
    {
      title: { fr: 'Déploiement', en: 'Deployment', de: 'Deployment' },
      body: [
        {
          fr: "Un push sur main déploie le site sur mon serveur par GitHub Actions, en blue/green derrière Caddy : la nouvelle version démarre à côté de l'ancienne et ne reçoit le trafic qu'une fois saine. Un tag de version publie l'appli sur Google Play et la soumet à Apple. Les correctifs urgents partent en mise à jour à chaud, sans repasser par les stores.",
          en: 'A push to main deploys the site to my server through GitHub Actions, blue/green behind Caddy: the new version boots next to the old one and only takes traffic once healthy. A version tag publishes the app to Google Play and submits it to Apple. Urgent fixes ship as live updates, without going through the stores.',
          de: 'Ein Push auf main deployt die Website über GitHub Actions auf meinen Server, Blue/Green hinter Caddy: Die neue Version startet neben der alten und übernimmt den Verkehr erst, wenn sie gesund ist. Ein Versions-Tag veröffentlicht die App bei Google Play und reicht sie bei Apple ein. Dringende Korrekturen gehen als Live-Update raus, ohne Umweg über die Stores.',
        },
      ],
    },
    {
      title: { fr: "Ce que ça m'a appris", en: 'What it taught me', de: 'Was ich dabei gelernt habe' },
      body: [
        {
          fr: "Le plus dur n'est pas d'écrire la fonctionnalité, c'est de la faire tenir en production : migrations sans coupure, compatibilité entre versions d'applis encore installées, performances sur des téléphones d'entrée de gamme, et des tests assez fiables pour livrer souvent sans stress.",
          en: 'The hard part is not writing the feature, it is keeping it standing in production: zero-downtime migrations, compatibility with older app versions still installed, performance on low-end phones, and tests reliable enough to ship often without fear.',
          de: 'Schwierig ist nicht, die Funktion zu schreiben, sondern sie in Produktion stabil zu halten: Migrationen ohne Ausfallzeit, Kompatibilität mit älteren, noch installierten App-Versionen, Leistung auf einfachen Smartphones und Tests, die zuverlässig genug sind, um oft und ohne Angst auszuliefern.',
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
    de: 'Drei Web-ERP-Systeme in Produktion, in einer Webagentur mit rund zwanzig Mitarbeitenden.',
  },
  summary: {
    fr: "Effet B développe des applications métier sur mesure, la plupart sur un CMS interne partagé par plus de 20 projets. J'y travaille depuis 2024, en alternance depuis 2025, sur des ERP en Symfony et sur des projets PHP repris d'autres équipes.",
    en: 'Effet B builds custom business applications, most of them on an in-house CMS shared by more than 20 projects. I have worked there since 2024, as an apprentice engineer since 2025, on Symfony ERPs and on PHP projects taken over from other teams.',
    de: 'Effet B entwickelt massgeschneiderte Fachanwendungen, die meisten auf einem hauseigenen CMS, das sich mehr als 20 Projekte teilen. Ich arbeite dort seit 2024, seit 2025 als dualer Ingenieurstudent, an Symfony-ERPs und an PHP-Projekten, die von anderen Teams übernommen wurden.',
  },
  context: { fr: 'Alternance, développeur PHP / Symfony', en: 'Work-study, PHP / Symfony developer', de: 'Duales Studium, Entwickler PHP / Symfony' },
  stack: ['PHP', 'Symfony', 'Doctrine', 'Twig', 'Messenger', 'MySQL', 'Docker', 'GitLab CI/CD', 'Sentry'],
  links: [],
  stats: [
    { value: '3', label: { fr: 'ERP en production', en: 'ERPs in production', de: 'ERPs in Produktion' } },
    { value: '20+', label: { fr: 'projets sur le CMS interne', en: 'projects on the in-house CMS', de: 'Projekte auf dem hauseigenen CMS' } },
    { value: '3 000+', label: { fr: 'commits sur le plus gros ERP', en: 'commits on the largest ERP', de: 'Commits im grössten ERP' } },
    { value: '2024', label: { fr: 'en poste depuis', en: 'on the team since', de: 'im Team seit' } },
  ],
  sections: [
    {
      title: { fr: 'ERP e-commerce : refonte des documents commerciaux', en: 'E-commerce ERP: rebuilding the sales documents', de: 'E-Commerce-ERP: Neuaufbau der Verkaufsbelege' },
      body: [
        {
          fr: "ERP e-commerce de pièces détachées, sur Symfony et le CMS interne. Les devis, commandes, bons de livraison et factures étaient peu reliés entre eux. J'ai restructuré la base pour que chaque ligne d'un devis se retrouve dans la commande, puis la livraison, puis la facture, avec une traçabilité complète.",
          en: 'E-commerce ERP selling spare parts, on Symfony and the in-house CMS. Quotes, orders, delivery notes and invoices were loosely linked. I restructured the database so every quote line flows into the order, the delivery note and the invoice, with full traceability.',
          de: 'E-Commerce-ERP für Ersatzteile, auf Symfony und dem hauseigenen CMS. Angebote, Bestellungen, Lieferscheine und Rechnungen waren nur lose verknüpft. Ich habe die Datenbank so umgebaut, dass jede Angebotszeile in die Bestellung, den Lieferschein und die Rechnung übergeht, vollständig nachverfolgbar.',
        },
        {
          fr: "Le plus délicat : migrer tous les documents existants sans casser la facturation en production. Migration progressive, scripts dédiés, tests sur des copies de données réelles.",
          en: 'The hard part: migrating every existing document without breaking billing in production. Gradual rollout, dedicated scripts, tests on copies of real data.',
          de: 'Der heikle Teil: alle bestehenden Belege migrieren, ohne die Fakturierung in Produktion zu unterbrechen. Schrittweise Einführung, eigene Skripte, Tests auf Kopien echter Daten.',
        },
        {
          fr: "Aussi livré : fiche client créée automatiquement depuis une demande de devis, bons de commande fournisseurs, saisie d'adresse assistée, tableau de bord statistiques, retours d'inventaire.",
          en: 'Also shipped: automatic customer records from quote requests, supplier purchase orders, assisted address entry, a statistics dashboard, inventory returns.',
          de: 'Ausserdem geliefert: automatische Kundenanlage aus Angebotsanfragen, Lieferantenbestellungen, unterstützte Adresseingabe, ein Statistik-Dashboard, Inventurrückläufe.',
        },
      ],
    },
    {
      title: { fr: 'ERP automobile : coffre-fort numérique par API', en: 'Automotive ERP: digital vault through an API', de: 'Automobil-ERP: digitaler Tresor per API' },
      body: [
        {
          fr: "Un ERP qui digitalise les concessions automobiles, notamment les dossiers d'immatriculation. Ma mission : y brancher un coffre-fort numérique certifié, fourni par un prestataire externe, pour que chaque concession archive ses documents de façon conforme.",
          en: 'An ERP that digitises car dealerships, including vehicle registration files. My task: plug in a certified digital vault from an external provider so each dealership archives its documents in a compliant way.',
          de: 'Ein ERP, das Autohäuser digitalisiert, unter anderem die Zulassungsunterlagen. Meine Aufgabe: einen zertifizierten digitalen Tresor eines externen Anbieters anbinden, damit jedes Autohaus seine Dokumente rechtskonform archiviert.',
        },
        {
          fr: "J'ai écrit le client API (authentification, envoi des documents), le provisionnement automatique d'un coffre par concession, les dépôts manuels et automatiques, et la réception des webhooks qui synchronisent l'état des dépôts. Côté sécurité : validation des clés AES-256, assainissement des données, gestion des cas limites.",
          en: 'I wrote the API client (authentication, document upload), automatic provisioning of one vault per dealership, manual and automatic uploads, and the webhooks that sync upload status back. On security: AES-256 key validation, input sanitisation, edge-case handling.',
          de: 'Ich habe den API-Client geschrieben (Authentifizierung, Dokumentenversand), die automatische Einrichtung eines Tresors pro Autohaus, manuelle und automatische Ablagen sowie die Webhooks, die den Status der Ablagen zurückmelden. Zur Sicherheit: Prüfung der AES-256-Schlüssel, Bereinigung der Eingaben, Behandlung von Grenzfällen.',
        },
      ],
    },
    {
      title: { fr: 'ERP de maintenance : reprise de code legacy', en: 'Maintenance ERP: taking over legacy code', de: 'Wartungs-ERP: Übernahme von Legacy-Code' },
      body: [
        {
          fr: "ERP de maintenance repris par l'agence, sans documentation. J'ai refondu tout le module client : fiche en quatre onglets, tables d'administration, matrices tarifaires par type de contrat avec import et export Excel, archivage des clients avec historique. Mon plus gros volume de code de l'année, fait en binôme avec un développeur senior.",
          en: 'Maintenance ERP taken over by the agency, with no documentation. I rebuilt the whole customer module: a four-tab record, admin tables, pricing matrices per contract type with Excel import and export, customer archiving with history. My largest body of code that year, paired with a senior developer.',
          de: 'Ein von der Agentur übernommenes Wartungs-ERP, ohne Dokumentation. Ich habe das gesamte Kundenmodul neu gebaut: Kundenakte mit vier Reitern, Verwaltungstabellen, Preismatrizen pro Vertragsart mit Excel-Import und -Export, Archivierung der Kunden mit Historie. Mein grösster Codeumfang in diesem Jahr, zusammen mit einem Senior-Entwickler.',
        },
      ],
    },
    {
      title: { fr: 'Ce que ça apporte à une équipe', en: 'What it brings to a team', de: 'Was das einem Team bringt' },
      body: [
        {
          fr: "Lire et reprendre du code que je n'ai pas écrit, livrer sur des bases de production qui facturent de vrais clients, intégrer une API tierce proprement, et corriger les bugs remontés par Sentry. C'est le quotidien d'une équipe produit, et c'est ce que je fais depuis deux ans.",
          en: 'Reading and taking over code I did not write, shipping on production databases that bill real customers, integrating a third-party API cleanly, and fixing bugs reported by Sentry. That is the daily work of a product team, and it is what I have done for two years.',
          de: 'Fremden Code lesen und übernehmen, auf Produktionsdatenbanken ausliefern, über die echte Kunden abgerechnet werden, eine Drittanbieter-API sauber anbinden und von Sentry gemeldete Fehler beheben. Das ist der Alltag eines Produktteams, und genau das mache ich seit zwei Jahren.',
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
      de: 'Website und Onlineshop einer selbstständigen Illustratorin, vollständig über ein CMS pflegbar.',
    },
    summary: {
      fr: "Galeries d'illustrations, d'animations et de graphisme, grille tarifaire interactive, formulaire de commande, boutique en ligne et pages légales, en quatre langues. Tout le contenu se modifie depuis un espace d'administration, sans toucher au code.",
      en: 'Illustration, animation and graphic design galleries, an interactive pricing grid, a commission form, an online shop and legal pages, in four languages. All content is edited from an admin studio, without touching the code.',
      de: 'Galerien für Illustration, Animation und Grafikdesign, eine interaktive Preistabelle, ein Auftragsformular, ein Onlineshop und rechtliche Seiten, in vier Sprachen. Alle Inhalte werden in einem Admin-Bereich gepflegt, ohne den Code anzufassen.',
    },
    context: { fr: 'Projet réalisé seul, pour une illustratrice', en: 'Built solo, for an illustrator', de: 'Allein umgesetzt, für eine Illustratorin' },
    role: {
      fr: 'Conception et développement de bout en bout : front-end, back-end, CMS, paiement et déploiement.',
      en: 'Designed and built end to end: front end, back end, CMS, payments and deployment.',
      de: 'Von A bis Z konzipiert und entwickelt: Front-End, Back-End, CMS, Zahlung und Deployment.',
    },
    highlights: [
      {
        fr: 'Nuxt 3 et Tailwind : galeries pré-rendues, rendu serveur pour le reste, animations GSAP.',
        en: 'Nuxt 3 and Tailwind: prerendered galleries, server-side rendering for the rest, GSAP animations.',
        de: 'Nuxt 3 und Tailwind: vorgerenderte Galerien, serverseitiges Rendering für den Rest, GSAP-Animationen.',
      },
      {
        fr: 'CMS headless Sanity : 16 schémas sur mesure aux champs traduits, pour publier sans développeur.',
        en: 'Sanity headless CMS: 16 custom schemas with translated fields, so content ships without a developer.',
        de: 'Headless-CMS Sanity: 16 massgeschneiderte Schemas mit übersetzten Feldern, damit Inhalte ohne Entwickler veröffentlicht werden.',
      },
      {
        fr: 'Panier et paiement Stripe Checkout ; un webhook confirme chaque commande et prévient par e-mail via Resend.',
        en: 'Cart and Stripe Checkout payments; a webhook confirms each order and sends an email through Resend.',
        de: 'Warenkorb und Zahlung mit Stripe Checkout; ein Webhook bestätigt jede Bestellung und verschickt eine E-Mail über Resend.',
      },
      {
        fr: 'Grille tarifaire qui calcule le prix selon le cadrage, le rendu et les suppléments.',
        en: 'Pricing grid that computes the price from framing, rendering level and extras.',
        de: 'Preistabelle, die den Preis aus Bildausschnitt, Ausarbeitungsgrad und Zusatzoptionen berechnet.',
      },
      {
        fr: "Français, anglais, espagnol et allemand avec Nuxt i18n, 20 routes d'API côté serveur.",
        en: 'French, English, Spanish and German with Nuxt i18n, 20 server API routes.',
        de: 'Französisch, Englisch, Spanisch und Deutsch mit Nuxt i18n, 20 serverseitige API-Routen.',
      },
    ],
    stack: ['Nuxt 3', 'Vue 3', 'TypeScript', 'Tailwind', 'Sanity', 'Stripe', 'Resend', 'GSAP'],
    links: [],
    cover: { fr: charlotteCover, alt: { fr: "Page d'accueil du site", en: 'Site home page', de: 'Startseite der Website' } },
    screens: [
      { src: charlotteGallery, caption: { fr: "Galerie d'illustrations", en: 'Illustration gallery', de: 'Illustrationsgalerie' } },
      { src: charlottePricing, caption: { fr: 'Grille tarifaire interactive', en: 'Interactive pricing grid', de: 'Interaktive Preistabelle' } },
      { src: charlotteCommissions, caption: { fr: 'Formulaire de commande', en: 'Commission form', de: 'Auftragsformular' } },
    ],
  },
  {
    slug: 'aloas',
    name: 'ALOAS',
    year: '2025',
    tagline: {
      fr: 'Gestion de tournois sportifs pour une association, utilisée lors de vrais tournois.',
      en: 'Sports tournament management for a non-profit, used at real tournaments.',
      de: 'Verwaltung von Sportturnieren für einen Verein, bei echten Turnieren eingesetzt.',
    },
    summary: {
      fr: "ALOAS aide une association à organiser des tournois pour des personnes en situation de handicap : inscriptions, planification, chronomètre, scores et suivi des résultats. Le site a servi lors de vrais événements.",
      en: 'ALOAS helps a non-profit run tournaments for people with disabilities: registration, scheduling, timer, scoring and results. The site was used at real events.',
      de: 'ALOAS hilft einem Verein, Turniere für Menschen mit Behinderung zu organisieren: Anmeldung, Planung, Zeitmessung, Punkte und Ergebnisse. Die Website wurde bei echten Veranstaltungen eingesetzt.',
    },
    context: { fr: "Projet d'équipe, IUT", en: 'Team project, IUT', de: 'Teamprojekt, IUT' },
    role: {
      fr: 'Chef de projet et développeur full-stack, responsable de la mise en production.',
      en: 'Project lead and full-stack developer, in charge of the production release.',
      de: 'Projektleiter und Full-Stack-Entwickler, verantwortlich für die Produktivsetzung.',
    },
    highlights: [
      { fr: 'Front-end et back-end avec Symfony, Twig et Tailwind.', en: 'Front end and back end with Symfony, Twig and Tailwind.', de: 'Front-End und Back-End mit Symfony, Twig und Tailwind.' },
      { fr: "Pilotage du projet et coordination de l'équipe jusqu'à la livraison.", en: 'Led the project and coordinated the team through delivery.', de: 'Projektleitung und Koordination des Teams bis zur Auslieferung.' },
      {
        fr: 'Mise en production : conteneur Docker, déploiement automatisé avec GitLab CI/CD.',
        en: 'Production release: Docker container, automated deployment with GitLab CI/CD.',
        de: 'Produktivsetzung: Docker-Container, automatisiertes Deployment mit GitLab CI/CD.',
      },
    ],
    stack: ['Symfony', 'Twig', 'Tailwind', 'MySQL', 'Docker', 'GitLab CI/CD'],
    links: [
      { label: { fr: 'Code sur GitHub', en: 'Code on GitHub', de: 'Code auf GitHub' }, href: 'https://github.com/QuentinBastos/ALOAS' },
    ],
    cover: { fr: aloasCover, alt: { fr: 'Liste des tournois', en: 'Tournament list', de: 'Turnierliste' } },
  },
  {
    slug: 'iot',
    name: 'IoT micro:bit',
    year: '2026',
    tagline: {
      fr: 'Architecture IoT de bout en bout : capteurs, radio chiffrée, serveur et appli Android.',
      en: 'End-to-end IoT architecture: sensors, encrypted radio, server and Android app.',
      de: 'Durchgängige IoT-Architektur: Sensoren, verschlüsselter Funk, Server und Android-App.',
    },
    summary: {
      fr: "Un micro:bit relève température, humidité, pression et luminosité et les envoie par radio à une passerelle, qui les relaie à un serveur Python. Une appli Android affiche les mesures et règle à distance l'affichage d'un écran OLED.",
      en: 'A micro:bit reads temperature, humidity, pressure and light and sends them over radio to a gateway, which relays them to a Python server. An Android app shows the readings and remotely sets what an OLED screen displays.',
      de: 'Ein micro:bit misst Temperatur, Luftfeuchtigkeit, Luftdruck und Helligkeit und sendet die Werte per Funk an ein Gateway, das sie an einen Python-Server weiterleitet. Eine Android-App zeigt die Messwerte an und steuert aus der Ferne, was ein OLED-Display anzeigt.',
    },
    context: { fr: "Projet d'équipe (4), CPE Lyon", en: 'Team project (4), CPE Lyon', de: 'Teamprojekt (4), CPE Lyon' },
    role: {
      fr: "Appli Android, protocole d'échange avec le serveur et sécurité.",
      en: 'Android app, protocol with the server and security.',
      de: 'Android-App, Protokoll mit dem Server und Sicherheit.',
    },
    highlights: [
      {
        fr: 'Appli Android en Java avec Material 3 : réception des mesures et envoi des commandes.',
        en: 'Android app in Java with Material 3: receiving readings and sending commands.',
        de: 'Android-App in Java mit Material 3: Empfang der Messwerte und Senden von Befehlen.',
      },
      { fr: "Protocole entre l'appli et le serveur, en UDP sur le Wi-Fi.", en: 'Protocol between the app and the server, over UDP on Wi-Fi.', de: 'Protokoll zwischen App und Server, per UDP über WLAN.' },
      { fr: 'Chiffrement AES-128 de la liaison radio entre objet et passerelle.', en: 'AES-128 encryption of the radio link between device and gateway.', de: 'AES-128-Verschlüsselung der Funkverbindung zwischen Gerät und Gateway.' },
    ],
    stack: ['Java', 'Android', 'Python', 'SQLite', 'C++', 'micro:bit', 'UDP'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub', de: 'Code auf GitHub' }, href: 'https://github.com/QuentinBastos/iot-project' }],
    cover: { fr: iotCover, en: iotCoverEn, alt: { fr: "Schéma de la chaîne IoT", en: 'IoT pipeline diagram', de: 'Schema der IoT-Kette' } },
  },
  {
    slug: 'chessjs',
    name: 'chessJS',
    year: '2024',
    tagline: {
      fr: "Jeu d'échecs complet en TypeScript, avec validation des coups.",
      en: 'A complete chess game in TypeScript, with move validation.',
      de: 'Ein vollständiges Schachspiel in TypeScript, mit Zugprüfung.',
    },
    summary: {
      fr: "Jeu d'échecs jouable à deux, qui valide chaque coup selon toutes les règles et conserve l'historique de la partie.",
      en: 'A two-player chess game that validates every move against the full rules and keeps the game history.',
      de: 'Ein Schachspiel für zwei, das jeden Zug nach allen Regeln prüft und den Partieverlauf speichert.',
    },
    context: { fr: "Projet d'équipe (2), IUT", en: 'Team project (2), IUT', de: 'Teamprojekt (2), IUT' },
    role: {
      fr: 'Développeur back-end, en binôme : moteur de jeu et validation des coups.',
      en: 'Back-end developer, in a pair: game engine and move validation.',
      de: 'Back-End-Entwickler, zu zweit: Spiel-Engine und Zugprüfung.',
    },
    highlights: [
      {
        fr: "Conception du moteur de jeu : représentation de l'échiquier et génération des coups légaux.",
        en: 'Designed the game engine: board representation and legal move generation.',
        de: 'Entwurf der Spiel-Engine: Darstellung des Bretts und Erzeugung der legalen Züge.',
      },
      { fr: "Implémentation de l'ensemble des règles et de l'historique de la partie.", en: 'Implemented the full set of rules and the game history.', de: 'Umsetzung aller Regeln und des Partieverlaufs.' },
    ],
    stack: ['TypeScript', 'Node.js', 'Vue 3', 'Tailwind'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub', de: 'Code auf GitHub' }, href: 'https://github.com/QuentinBastos/chessJS' }],
    cover: { fr: chessCover, alt: { fr: 'Partie en cours sur chessJS', en: 'A game in progress on chessJS', de: 'Eine laufende Partie in chessJS' } },
  },
  {
    slug: 'spotify',
    name: 'SpotifySong',
    year: '2024',
    tagline: {
      fr: "Recherche et écoute de morceaux via l'API Spotify, avec bibliothèque et playlists.",
      en: 'Search and play tracks through the Spotify API, with a library and playlists.',
      de: 'Titel über die Spotify-API suchen und abspielen, mit Bibliothek und Playlists.',
    },
    summary: {
      fr: "Rechercher des morceaux par titre, artiste ou album, les écouter et les ranger en playlists, à partir des données de l'API Spotify. Comptes utilisateurs et favoris.",
      en: 'Search tracks by title, artist or album, play them and organise them into playlists, using data from the Spotify API. User accounts and favourites.',
      de: 'Titel nach Name, Künstler oder Album suchen, abspielen und in Playlists ordnen, auf Basis der Daten der Spotify-API. Benutzerkonten und Favoriten.',
    },
    context: { fr: 'Projet personnel, mené seul', en: 'Personal project, built solo', de: 'Persönliches Projekt, allein umgesetzt' },
    role: { fr: 'Projet réalisé seul, de bout en bout.', en: 'Built on my own, end to end.', de: 'Allein umgesetzt, von A bis Z.' },
    highlights: [
      {
        fr: "Intégration de l'API Spotify pour la recherche de morceaux et la récupération de leurs métadonnées.",
        en: 'Integrated the Spotify API for track search and metadata retrieval.',
        de: 'Anbindung der Spotify-API für die Titelsuche und das Abrufen der Metadaten.',
      },
      { fr: 'Persistance des bibliothèques et des playlists des utilisateurs en MySQL.', en: 'Stored user libraries and playlists in MySQL.', de: 'Speicherung der Bibliotheken und Playlists der Nutzer in MySQL.' },
    ],
    stack: ['Symfony', 'Twig', 'Bootstrap', 'Sass', 'Spotify API', 'MySQL'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub', de: 'Code auf GitHub' }, href: 'https://github.com/QuentinBastos/Spotify' }],
    cover: { fr: spotifyCover, alt: { fr: 'Recherche de morceaux sur SpotifySong', en: 'Track search on SpotifySong', de: 'Titelsuche in SpotifySong' } },
  },
  {
    slug: 'phase10',
    name: 'Phase 10',
    year: '2023',
    tagline: {
      fr: 'Le jeu de cartes Phase 10, jouable à plusieurs en temps réel.',
      en: 'The Phase 10 card game, playable with others in real time.',
      de: 'Das Kartenspiel Phase 10, in Echtzeit mit anderen spielbar.',
    },
    summary: {
      fr: 'Adaptation web du jeu de cartes Phase 10 : dix phases à compléter dans l’ordre, jouables à plusieurs en temps réel.',
      en: 'A web version of the Phase 10 card game: ten phases to complete in order, playable with others in real time.',
      de: 'Eine Webversion des Kartenspiels Phase 10: zehn Phasen, die der Reihe nach zu erfüllen sind, in Echtzeit mit anderen spielbar.',
    },
    context: { fr: "Projet d'équipe (4), IUT", en: 'Team project (4), IUT', de: 'Teamprojekt (4), IUT' },
    role: { fr: "Développeur front-end, dans une équipe de quatre.", en: 'Front-end developer, in a team of four.', de: 'Front-End-Entwickler, in einem Viererteam.' },
    highlights: [
      { fr: "Développement de l'interface de jeu en Angular.", en: 'Built the game interface in Angular.', de: 'Entwicklung der Spieloberfläche in Angular.' },
      { fr: 'Synchronisation des parties en temps réel avec Socket.IO côté client.', en: 'Real-time game synchronisation with Socket.IO on the client side.', de: 'Echtzeit-Synchronisierung der Partien mit Socket.IO auf der Client-Seite.' },
    ],
    stack: ['Angular', 'TypeScript', 'Node.js', 'Socket.IO'],
    links: [],
    cover: { fr: phase10Cover, alt: { fr: 'Table de jeu de Phase 10', en: 'Phase 10 game table', de: 'Spieltisch von Phase 10' } },
  },
  {
    slug: 'livre-interactif',
    name: 'Livre interactif',
    year: '2024',
    tagline: {
      fr: 'Création et partage de livres interactifs, avec génération d’histoires par IA.',
      en: 'Create and share interactive books, with AI story generation.',
      de: 'Interaktive Bücher erstellen und teilen, mit KI-generierten Geschichten.',
    },
    summary: {
      fr: "Écrire des récits, y ajouter textes, images et liens, puis les partager. Une fonction de génération s'appuie sur l'API OpenAI pour écrire une histoire à partir de quelques mots.",
      en: 'Write stories, add text, images and links, then share them. A generation feature relies on the OpenAI API to write a story from a few words.',
      de: 'Geschichten schreiben, Texte, Bilder und Links hinzufügen und sie dann teilen. Eine Generierungsfunktion nutzt die OpenAI-API, um aus wenigen Worten eine Geschichte zu schreiben.',
    },
    context: { fr: "Projet d'équipe (2), IUT", en: 'Team project (2), IUT', de: 'Teamprojekt (2), IUT' },
    role: { fr: 'Développeur back-end, en binôme.', en: 'Back-end developer, in a pair.', de: 'Back-End-Entwickler, zu zweit.' },
    highlights: [
      { fr: 'Back-end Symfony : modélisation des livres, de leurs pages et de leurs liens.', en: 'Symfony back end: data model for books, their pages and their links.', de: 'Symfony-Back-End: Datenmodell für Bücher, ihre Seiten und ihre Verknüpfungen.' },
      { fr: "Intégration de l'API OpenAI pour générer des histoires à partir d'une consigne courte.", en: 'Integrated the OpenAI API to generate stories from a short prompt.', de: 'Anbindung der OpenAI-API, um Geschichten aus einer kurzen Vorgabe zu erzeugen.' },
      { fr: "Conteneurisation de l'application avec Docker.", en: 'Containerised the application with Docker.', de: 'Containerisierung der Anwendung mit Docker.' },
    ],
    stack: ['Symfony', 'Twig', 'Tailwind', 'Sass', 'OpenAI API', 'Docker'],
    links: [{ label: { fr: 'Code sur GitHub', en: 'Code on GitHub', de: 'Code auf GitHub' }, href: 'https://github.com/QuentinBastos/InteractiveBook' }],
    cover: { fr: bookCover, alt: { fr: "Page d'un livre interactif", en: 'An interactive book page', de: 'Eine Seite eines interaktiven Buchs' } },
  },
];

/** Ordre d'affichage des autres projets. */
const order = ['charlotte', 'chessjs', 'spotify', 'aloas', 'phase10', 'iot', 'livre-interactif'];
export const otherProjects: Project[] = order.map((slug) => others.find((p) => p.slug === slug)!);

/** Dépôts publics de cours, cités sans page dédiée. */
export const githubExtras: { name: string; note: T; href: string }[] = [
  { name: 'systeme-exploitation', note: { fr: 'Système, C', en: 'Operating systems, C', de: 'Betriebssysteme, C' }, href: 'https://github.com/QuentinBastos/systeme-exploitation' },
  { name: 'microprocesseur', note: { fr: 'Microcontrôleur 8051, C et assembleur', en: '8051 microcontroller, C and assembly', de: 'Mikrocontroller 8051, C und Assembler' }, href: 'https://github.com/QuentinBastos/microprocesseur' },
  { name: 'algo-a3', note: { fr: 'Algorithmique, Python', en: 'Algorithms, Python', de: 'Algorithmik, Python' }, href: 'https://github.com/QuentinBastos/algo-a3' },
  { name: 'api-library', note: { fr: 'API REST, TypeScript', en: 'REST API, TypeScript', de: 'REST-API, TypeScript' }, href: 'https://github.com/QuentinBastos/api-library' },
];

/** Projets affichés comme tels (CV, cartes). */
export const projects = [sparklequiz, ...otherProjects];

/** Toutes les pages /projets/[slug], études de cas d'expérience comprises. */
export const allProjects = [sparklequiz, effetB, ...otherProjects];
