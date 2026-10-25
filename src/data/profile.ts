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
  location: { fr: 'Eysins (VD), près de Nyon', en: 'Eysins (VD), near Nyon' } as T,
  role: {
    fr: 'Élève ingénieur informatique, développeur back-end PHP / Symfony',
    en: 'Software engineering student, PHP / Symfony back-end developer',
  } as T,
  pitch: {
    fr: "Je développe depuis 2024 des ERP web en production, en alternance avec CPE Lyon. À côté, j'ai conçu et je maintiens seul SparkleQuiz, une application de quiz publiée sur le web, Google Play et l'App Store.",
    en: 'Since 2024 I have been building production web ERPs as an apprentice engineer at CPE Lyon. On my own, I designed and run SparkleQuiz, a quiz app live on the web, Google Play and the App Store.',
  } as T,
  availability: {
    fr: 'Stage de 10 à 14 semaines, entre le 14 juin et le 19 septembre 2027',
    en: '10 to 14 week internship, between 14 June and 19 September 2027',
  } as T,
  availabilityShort: { fr: 'Stage été 2027, 10 à 14 semaines', en: 'Summer 2027 internship, 10 to 14 weeks' } as T,
  availabilityNote: {
    fr: "Mission à l'étranger de mon cursus, sous convention CPE Lyon. Ressortissant UE.",
    en: 'Mandatory international placement of my degree, under a CPE Lyon agreement. EU citizen.',
  } as T,
  cvPdf: { fr: '/files/CV-Quentin-Bastos-FR.pdf', en: '/files/CV-Quentin-Bastos-EN.pdf' } as T,
};

export const deliver = {
  title: { fr: 'Ce que je livre en 10 à 14 semaines', en: 'What I ship in 10 to 14 weeks' } as T,
  intro: {
    fr: "Deux ans de Symfony en production : je n'arrive pas pour apprendre le métier. Un stage court peut livrer un sujet délimité, de bout en bout.",
    en: 'Two years of Symfony in production: I will not need to learn the job. A short internship can ship a well-scoped topic, end to end.',
  } as T,
  items: [
    {
      title: { fr: 'Un module métier', en: 'A business module' },
      text: {
        fr: 'Modèle de données, back-end Symfony, interface, tests, mise en production.',
        en: 'Data model, Symfony back end, UI, tests, production rollout.',
      },
    },
    {
      title: { fr: 'Une API', en: 'An API' },
      text: {
        fr: 'Endpoints documentés, validation stricte, 4xx pour les cas prévus, 5xx pour les vrais bugs.',
        en: 'Documented endpoints, strict validation, 4xx for expected cases, 5xx for real bugs.',
      },
    },
    {
      title: { fr: 'Une migration', en: 'A migration' },
      text: {
        fr: 'Montée de version PHP ou Symfony, refonte de schéma MySQL, reprise de données sans coupure.',
        en: 'PHP or Symfony upgrade, MySQL schema redesign, data migration with zero downtime.',
      },
    },
    {
      title: { fr: 'Une couverture de tests', en: 'Test coverage' },
      text: {
        fr: 'PHPStan, PHPUnit et Playwright sur les parcours critiques, branchés dans la CI.',
        en: 'PHPStan, PHPUnit and Playwright on critical paths, wired into CI.',
      },
    },
  ] satisfies { title: T; text: T }[],
  timeline: [
    { when: { fr: 'Semaine 1', en: 'Week 1' }, what: { fr: 'Environnement en place, premier correctif livré', en: 'Set up, first fix shipped' } },
    { when: { fr: 'Semaines 2 à 11', en: 'Weeks 2 to 11' }, what: { fr: 'Le sujet, livré par incréments relus', en: 'The topic, shipped in reviewed increments' } },
    { when: { fr: 'Dernières semaines', en: 'Final weeks' }, what: { fr: 'Documentation et passation', en: 'Documentation and handover' } },
  ] satisfies { when: T; what: T }[],
};

export const experience = [
  {
    org: 'Effet B',
    title: { fr: 'Développeur PHP / Symfony', en: 'PHP / Symfony developer' },
    place: { fr: 'Agence web, Villeurbanne', en: 'Web agency, Villeurbanne (Lyon)' },
    period: { fr: 'Depuis avril 2024', en: 'Since April 2024' },
    detail: {
      fr: "Apprenti ingénieur depuis 2025, alternant en BUT 2024-2025, CDD d'été et stage en 2024.",
      en: 'Apprentice engineer since 2025, work-study during my BUT in 2024-2025, summer contract and internship in 2024.',
    },
    bullets: [
      {
        fr: "ERP e-commerce sur Symfony et le CMS interne : refonte des documents commerciaux « ligne à ligne », du devis à la facture, avec migration de tout l'historique sans casser la facturation.",
        en: "E-commerce ERP on Symfony and the in-house CMS: rebuilt the line-by-line sales document flow, from quote to invoice, and migrated the whole history without breaking billing.",
      },
      {
        fr: "ERP de concessions automobiles : intégration d'un coffre-fort numérique certifié par API (client API, coffre par concession, dépôts automatiques, webhooks, clés AES-256).",
        en: 'Car dealership ERP: integrated a certified digital vault through a third-party API (API client, one vault per dealership, automatic uploads, webhooks, AES-256 keys).',
      },
      {
        fr: 'ERP de maintenance repris en legacy : refonte complète du module client, matrices tarifaires avec import et export Excel, archivage historisé.',
        en: 'Legacy maintenance ERP: full rewrite of the customer module, pricing matrices with Excel import and export, archiving with history.',
      },
      {
        fr: 'Au quotidien : bugs de production remontés par Sentry, Docker, GitLab CI/CD, revues de code.',
        en: 'Day to day: production bugs from Sentry, Docker, GitLab CI/CD, code reviews.',
      },
    ],
    stack: ['PHP', 'Symfony', 'Doctrine', 'Twig', 'Messenger', 'MySQL', 'Docker', 'GitLab CI', 'Sentry'],
    caseSlug: 'effet-b',
  },
  {
    org: 'Baxter',
    title: { fr: 'Opérateur de production', en: 'Production operator' },
    place: { fr: 'Meyzieu, intérim', en: 'Meyzieu, temp work' },
    period: { fr: '2022 à 2024', en: '2022 to 2024' },
    detail: {
      fr: 'Week-ends et vacances en salle blanche, pendant mes études.',
      en: 'Weekends and holidays in a cleanroom, alongside my studies.',
    },
    bullets: [],
    stack: [],
  },
] satisfies { org: string; title: T; place: T; period: T; detail: T; bullets: T[]; stack: string[]; caseSlug?: string }[];

export const education = [
  {
    school: 'CPE Lyon',
    title: { fr: "Diplôme d'ingénieur, informatique et réseaux", en: 'Engineering degree, computer science and networks' },
    period: { fr: '2025 à 2028, en alternance', en: '2025 to 2028, work-study' },
    detail: {
      fr: 'Bachelor CPE Lyon obtenu en septembre 2026. Génie logiciel, bases de données, systèmes, réseaux, cloud.',
      en: 'CPE Lyon Bachelor awarded in September 2026. Software engineering, databases, systems, networks, cloud.',
    },
  },
  {
    school: 'IUT Lyon 1',
    title: { fr: 'BUT Informatique', en: 'BUT in Computer Science (3-year degree)' },
    period: { fr: '2021 à 2025, Bourg-en-Bresse', en: '2021 to 2025, Bourg-en-Bresse' },
    detail: {
      fr: "Parcours développement d'applications : web, Java, bases de données.",
      en: 'Application development track: web, Java, databases.',
    },
  },
] satisfies { school: string; title: T; period: T; detail: T }[];

export const skills = [
  { group: { fr: 'Back-end', en: 'Back end' }, items: ['PHP 8', 'Symfony', 'Doctrine', 'Node.js', 'Java'] },
  { group: { fr: 'Front et mobile', en: 'Front end and mobile' }, items: ['Vue 3', 'TypeScript', 'Tailwind', 'Capacitor'] },
  { group: { fr: 'Données et temps réel', en: 'Data and real time' }, items: ['MySQL / MariaDB', 'Redis', 'Mercure'] },
  { group: { fr: 'Outils', en: 'Tooling' }, items: ['Docker', 'Git', 'Linux', 'GitHub Actions', 'PHPStan', 'Playwright'] },
] satisfies { group: T; items: string[] }[];

export const languages: { name: T; level: T }[] = [
  { name: { fr: 'Français', en: 'French' }, level: { fr: 'langue maternelle', en: 'native' } },
  { name: { fr: 'Anglais', en: 'English' }, level: { fr: 'B2', en: 'B2' } },
];
