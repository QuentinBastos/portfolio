import type { T } from '../i18n';

/**
 * Source unique du contenu : accueil, pages projets, /cv et JSON-LD lisent ici.
 * Ton direct, SparkleQuiz présenté comme un projet (pas « fondateur »), aucun tiret cadratin.
 */

export const person = {
  name: 'Quentin Bastos',
  email: 'bastos.quentin.pro@gmail.com',
  github: 'https://github.com/QuentinBastos',
  linkedin: 'https://www.linkedin.com/in/quentin-bastos-a02838222',
  location: { fr: 'Eysins (VD), près de Nyon', en: 'Eysins (VD), near Nyon', de: 'Eysins (VD), bei Nyon' } as T,
  role: {
    fr: 'Élève ingénieur informatique, développeur back-end PHP / Symfony',
    en: 'Software engineering student, PHP / Symfony back-end developer',
    de: 'Informatik-Ingenieurstudent, Back-End-Entwickler PHP / Symfony',
  } as T,
  pitch: {
    fr: "Je développe depuis 2024 des ERP web en production, en alternance avec CPE Lyon. À côté, j'ai conçu et je maintiens seul SparkleQuiz, une application de quiz publiée sur le web, Google Play et l'App Store.",
    en: 'Since 2024 I have been building production web ERPs as an apprentice engineer at CPE Lyon. On my own, I designed and run SparkleQuiz, a quiz app live on the web, Google Play and the App Store.',
    de: 'Seit 2024 entwickle ich produktive Web-ERP-Systeme, als dualer Ingenieurstudent an der CPE Lyon. Daneben habe ich allein SparkleQuiz konzipiert und betreibe die Quiz-App, die im Web, bei Google Play und im App Store verfügbar ist.',
  } as T,
  availability: {
    fr: 'Stage de 10 à 14 semaines, entre le 14 juin et le 19 septembre 2027',
    en: '10 to 14 week internship, between 14 June and 19 September 2027',
    de: 'Praktikum von 10 bis 14 Wochen, zwischen dem 14. Juni und dem 19. September 2027',
  } as T,
  availabilityShort: { fr: 'Stage été 2027, 10 à 14 semaines', en: 'Summer 2027 internship, 10 to 14 weeks', de: 'Praktikum Sommer 2027, 10 bis 14 Wochen' } as T,
  availabilityNote: {
    fr: "Mission à l'étranger de mon cursus, sous convention CPE Lyon. Ressortissant UE.",
    en: 'Mandatory international placement of my degree, under a CPE Lyon agreement. EU citizen.',
    de: 'Pflicht-Auslandseinsatz meines Studiums, mit Praktikumsvertrag der CPE Lyon. EU-Bürger.',
  } as T,
  cvPdf: { fr: '/files/CV-Quentin-Bastos-FR.pdf', en: '/files/CV-Quentin-Bastos-EN.pdf', de: '/files/CV-Quentin-Bastos-EN.pdf' } as T,
};

export const deliver = {
  title: { fr: 'Ce que je livre en 10 à 14 semaines', en: 'What I ship in 10 to 14 weeks', de: 'Was ich in 10 bis 14 Wochen liefere' } as T,
  intro: {
    fr: "Deux ans de Symfony en production : je n'arrive pas pour apprendre le métier. Un stage court peut livrer un sujet délimité, de bout en bout.",
    en: 'Two years of Symfony in production: I will not need to learn the job. A short internship can ship a well-scoped topic, end to end.',
    de: 'Zwei Jahre Symfony in Produktion: Das Handwerk muss ich nicht erst lernen. Ein kurzes Praktikum reicht, um ein klar umrissenes Thema von A bis Z zu liefern.',
  } as T,
  items: [
    {
      title: { fr: 'Un module métier', en: 'A business module', de: 'Ein Fachmodul' },
      text: {
        fr: 'Modèle de données, back-end Symfony, interface, tests, mise en production.',
        en: 'Data model, Symfony back end, UI, tests, production rollout.',
        de: 'Datenmodell, Symfony-Back-End, Oberfläche, Tests, Produktivsetzung.',
      },
    },
    {
      title: { fr: 'Une API', en: 'An API', de: 'Eine API' },
      text: {
        fr: 'Endpoints documentés, validation stricte, 4xx pour les cas prévus, 5xx pour les vrais bugs.',
        en: 'Documented endpoints, strict validation, 4xx for expected cases, 5xx for real bugs.',
        de: 'Dokumentierte Endpunkte, strenge Validierung, 4xx für erwartbare Fälle, 5xx für echte Fehler.',
      },
    },
    {
      title: { fr: 'Une migration', en: 'A migration', de: 'Eine Migration' },
      text: {
        fr: 'Montée de version PHP ou Symfony, refonte de schéma MySQL, reprise de données sans coupure.',
        en: 'PHP or Symfony upgrade, MySQL schema redesign, data migration with zero downtime.',
        de: 'PHP- oder Symfony-Upgrade, Umbau des MySQL-Schemas, Datenmigration ohne Ausfallzeit.',
      },
    },
    {
      title: { fr: 'Une couverture de tests', en: 'Test coverage', de: 'Testabdeckung' },
      text: {
        fr: 'PHPStan, PHPUnit et Playwright sur les parcours critiques, branchés dans la CI.',
        en: 'PHPStan, PHPUnit and Playwright on critical paths, wired into CI.',
        de: 'PHPStan, PHPUnit und Playwright auf den kritischen Abläufen, in die CI eingebunden.',
      },
    },
  ] satisfies { title: T; text: T }[],
  timeline: [
    { when: { fr: 'Semaine 1', en: 'Week 1', de: 'Woche 1' }, what: { fr: 'Environnement en place, premier correctif livré', en: 'Set up, first fix shipped', de: 'Umgebung eingerichtet, erster Fix ausgeliefert' } },
    { when: { fr: 'Semaines 2 à 11', en: 'Weeks 2 to 11', de: 'Wochen 2 bis 11' }, what: { fr: 'Le sujet, livré par incréments relus', en: 'The topic, shipped in reviewed increments', de: 'Das Thema, in geprüften Schritten ausgeliefert' } },
    { when: { fr: 'Dernières semaines', en: 'Final weeks', de: 'Letzte Wochen' }, what: { fr: 'Documentation et passation', en: 'Documentation and handover', de: 'Dokumentation und Übergabe' } },
  ] satisfies { when: T; what: T }[],
};

export const experience = [
  {
    org: 'Effet B',
    title: { fr: 'Développeur PHP / Symfony', en: 'PHP / Symfony developer', de: 'Entwickler PHP / Symfony' },
    place: { fr: 'Agence web, Villeurbanne', en: 'Web agency, Villeurbanne (Lyon)', de: 'Webagentur, Villeurbanne (Lyon)' },
    period: { fr: 'Depuis avril 2024', en: 'Since April 2024', de: 'Seit April 2024' },
    detail: {
      fr: "Apprenti ingénieur depuis 2025, alternant en BUT 2024-2025, CDD d'été et stage en 2024.",
      en: 'Apprentice engineer since 2025, work-study during my BUT in 2024-2025, summer contract and internship in 2024.',
      de: 'Dualer Ingenieurstudent seit 2025, duales Studium während meines BUT 2024-2025, Sommervertrag und Praktikum 2024.',
    },
    bullets: [
      {
        fr: "ERP e-commerce sur Symfony et le CMS interne : refonte des documents commerciaux « ligne à ligne », du devis à la facture, avec migration de tout l'historique sans casser la facturation.",
        en: "E-commerce ERP on Symfony and the in-house CMS: rebuilt the line-by-line sales document flow, from quote to invoice, and migrated the whole history without breaking billing.",
        de: 'E-Commerce-ERP auf Symfony und dem hauseigenen CMS: Neuaufbau der Verkaufsbelege Zeile für Zeile, vom Angebot bis zur Rechnung, und Migration der gesamten Historie, ohne die Fakturierung zu unterbrechen.',
      },
      {
        fr: "ERP de concessions automobiles : intégration d'un coffre-fort numérique certifié par API (client API, coffre par concession, dépôts automatiques, webhooks, clés AES-256).",
        en: 'Car dealership ERP: integrated a certified digital vault through a third-party API (API client, one vault per dealership, automatic uploads, webhooks, AES-256 keys).',
        de: 'ERP für Autohäuser: Anbindung eines zertifizierten digitalen Tresors über eine Drittanbieter-API (API-Client, ein Tresor pro Autohaus, automatische Ablage, Webhooks, AES-256-Schlüssel).',
      },
      {
        fr: 'ERP de maintenance repris en legacy : refonte complète du module client, matrices tarifaires avec import et export Excel, archivage historisé.',
        en: 'Legacy maintenance ERP: full rewrite of the customer module, pricing matrices with Excel import and export, archiving with history.',
        de: 'Übernommenes Wartungs-ERP: kompletter Neubau des Kundenmoduls, Preismatrizen mit Excel-Import und -Export, Archivierung mit Historie.',
      },
      {
        fr: 'Au quotidien : bugs de production remontés par Sentry, Docker, GitLab CI/CD, revues de code.',
        en: 'Day to day: production bugs from Sentry, Docker, GitLab CI/CD, code reviews.',
        de: 'Im Alltag: Produktionsfehler aus Sentry, Docker, GitLab CI/CD, Code-Reviews.',
      },
    ],
    stack: ['PHP', 'Symfony', 'Doctrine', 'Twig', 'Messenger', 'MySQL', 'Docker', 'GitLab CI', 'Sentry'],
    caseSlug: 'effet-b',
  },
  {
    org: 'Baxter',
    title: { fr: 'Opérateur de production', en: 'Production operator', de: 'Produktionsmitarbeiter' },
    place: { fr: 'Meyzieu, intérim', en: 'Meyzieu, temp work', de: 'Meyzieu, Zeitarbeit' },
    period: { fr: '2022 à 2024', en: '2022 to 2024', de: '2022 bis 2024' },
    detail: {
      fr: 'Week-ends et vacances en salle blanche, pendant mes études.',
      en: 'Weekends and holidays in a cleanroom, alongside my studies.',
      de: 'An Wochenenden und in den Ferien im Reinraum, neben dem Studium.',
    },
    bullets: [],
    stack: [],
  },
] satisfies { org: string; title: T; place: T; period: T; detail: T; bullets: T[]; stack: string[]; caseSlug?: string }[];

export const education = [
  {
    school: 'CPE Lyon',
    title: { fr: "Diplôme d'ingénieur, informatique et réseaux", en: 'Engineering degree, computer science and networks', de: 'Ingenieurdiplom, Informatik und Netzwerke' },
    period: { fr: '2025 à 2028, en alternance', en: '2025 to 2028, work-study', de: '2025 bis 2028, dual' },
    detail: {
      fr: 'Bachelor CPE Lyon obtenu en septembre 2026. Génie logiciel, bases de données, systèmes, réseaux, cloud.',
      en: 'CPE Lyon Bachelor awarded in September 2026. Software engineering, databases, systems, networks, cloud.',
      de: 'Bachelor der CPE Lyon im September 2026 erworben. Softwaretechnik, Datenbanken, Systeme, Netzwerke, Cloud.',
    },
  },
  {
    school: 'IUT Lyon 1',
    title: { fr: 'BUT Informatique', en: 'BUT in Computer Science (3-year degree)', de: 'BUT Informatik (dreijähriges Studium)' },
    period: { fr: '2021 à 2025, Bourg-en-Bresse', en: '2021 to 2025, Bourg-en-Bresse', de: '2021 bis 2025, Bourg-en-Bresse' },
    detail: {
      fr: "Parcours développement d'applications : web, Java, bases de données.",
      en: 'Application development track: web, Java, databases.',
      de: 'Schwerpunkt Anwendungsentwicklung: Web, Java, Datenbanken.',
    },
  },
] satisfies { school: string; title: T; period: T; detail: T }[];

export const skills = [
  { group: { fr: 'Back-end', en: 'Back end', de: 'Back-End' }, items: ['PHP 8', 'Symfony', 'Doctrine', 'Node.js', 'Java'] },
  { group: { fr: 'Front et mobile', en: 'Front end and mobile', de: 'Front-End und Mobile' }, items: ['Vue 3', 'TypeScript', 'Tailwind', 'Capacitor'] },
  { group: { fr: 'Données et temps réel', en: 'Data and real time', de: 'Daten und Echtzeit' }, items: ['MySQL / MariaDB', 'Redis', 'Mercure'] },
  { group: { fr: 'Outils', en: 'Tooling', de: 'Werkzeuge' }, items: ['Docker', 'Git', 'Linux', 'GitHub Actions', 'PHPStan', 'Playwright'] },
] satisfies { group: T; items: string[] }[];

export const languages: { name: T; level: T }[] = [
  { name: { fr: 'Français', en: 'French', de: 'Französisch' }, level: { fr: 'langue maternelle', en: 'native', de: 'Muttersprache' } },
  { name: { fr: 'Anglais', en: 'English', de: 'Englisch' }, level: { fr: 'B2', en: 'B2', de: 'B2' } },
];
