export const langs = ['fr', 'en', 'de'] as const;
export type Lang = (typeof langs)[number];

/** Chaîne multilingue : chaque texte affiché existe dans toutes les langues. */
export type T = Record<Lang, string>;

/** Nom de chaque langue dans sa propre langue, pour le menu. */
export const langNames: T = { fr: 'Français', en: 'English', de: 'Deutsch' };

/** Locale des dates et des nombres. Allemand de Suisse : la cible du stage. */
export const locales: T = { fr: 'fr-FR', en: 'en-GB', de: 'de-CH' };
export const ogLocales: T = { fr: 'fr_FR', en: 'en_GB', de: 'de_CH' };

export const ui = {
  navWork: { fr: 'Parcours', en: 'Experience', de: 'Werdegang' },
  navProjects: { fr: 'Projets', en: 'Projects', de: 'Projekte' },
  navInternship: { fr: 'Stage', en: 'Internship', de: 'Praktikum' },
  navContact: { fr: 'Contact', en: 'Contact', de: 'Kontakt' },
  navCv: { fr: 'CV', en: 'Resume', de: 'Lebenslauf' },
  langMenu: { fr: 'Choisir la langue', en: 'Choose language', de: 'Sprache wählen' },
  skip: { fr: 'Aller au contenu', en: 'Skip to content', de: 'Zum Inhalt' },
  contactMe: { fr: 'Me contacter', en: 'Get in touch', de: 'Kontakt aufnehmen' },
  downloadCv: { fr: 'CV en PDF', en: 'Resume (PDF)', de: 'Lebenslauf (PDF, Englisch)' },
  openPdf: { fr: 'Ouvrir le PDF', en: 'Open the PDF', de: 'PDF öffnen' },
  cvAlt: { fr: 'CV de Quentin Bastos, une page', en: 'Quentin Bastos resume, one page', de: 'Lebenslauf von Quentin Bastos, eine Seite (Englisch)' },
  readCase: { fr: "Lire l'étude de cas", en: 'Read the case study', de: 'Fallstudie lesen' },
  back: { fr: "Retour à l'accueil", en: 'Back to home', de: 'Zurück zur Startseite' },
  copied: { fr: 'Copié', en: 'Copied', de: 'Kopiert' },
  copyEmail: { fr: "Copier l'adresse", en: 'Copy address', de: 'Adresse kopieren' },
  open: { fr: 'Ouvrir', en: 'Open', de: 'Öffnen' },
  homeTitle: {
    fr: 'Quentin Bastos, développeur PHP / Symfony',
    en: 'Quentin Bastos, PHP / Symfony developer',
    de: 'Quentin Bastos, Entwickler PHP / Symfony',
  },
  available: { fr: 'Disponible', en: 'Available', de: 'Verfügbar' },
  school: { fr: 'École', en: 'School', de: 'Hochschule' },
  schoolValue: { fr: 'CPE Lyon, 4e année', en: 'CPE Lyon, 4th year', de: 'CPE Lyon, 4. Jahr' },
  experience: { fr: 'Expérience', en: 'Experience', de: 'Erfahrung' },
  experienceValue: { fr: '2 ans de Symfony en prod', en: '2 years of Symfony in prod', de: '2 Jahre Symfony in Produktion' },
  basedIn: { fr: 'Basé à', en: 'Based in', de: 'Wohnort' },
  mainProject: { fr: 'Projet principal', en: 'Main project', de: 'Hauptprojekt' },
  inProduction: { fr: 'en production', en: 'in production', de: 'in Produktion' },
  incident: { fr: 'incident en cours', en: 'incident ongoing', de: 'laufende Störung' },
  liveStatus: { fr: 'État de SparkleQuiz en production', en: 'SparkleQuiz production status', de: 'Status von SparkleQuiz in Produktion' },
  checkedOn: { fr: 'Relevé le', en: 'Checked on', de: 'Abgefragt am' },
  erpDetail: { fr: 'Le détail des trois ERP', en: 'The three ERPs in detail', de: 'Die drei ERPs im Detail' },
  education: { fr: 'Formation', en: 'Education', de: 'Ausbildung' },
  tooling: { fr: 'Outils', en: 'Tooling', de: 'Werkzeuge' },
  otherProjects: { fr: 'Autres projets', en: 'Other projects', de: 'Weitere Projekte' },
  coursework: { fr: 'Aussi sur GitHub, travaux de cours', en: 'Also on GitHub, coursework', de: 'Ausserdem auf GitHub, Studienarbeiten' },
  myRole: { fr: 'Mon rôle. ', en: 'My role. ', de: 'Meine Rolle. ' },
  whatIDid: { fr: "Ce que j'ai fait", en: 'What I did', de: 'Was ich gemacht habe' },
  screenshots: { fr: "Captures d'écran", en: 'Screenshots', de: 'Screenshots' },
  archLabel: { fr: "Schéma d'architecture de SparkleQuiz", en: 'SparkleQuiz architecture diagram', de: 'Architekturschema von SparkleQuiz' },
  archData: { fr: 'données', en: 'data', de: 'Daten' },
  archCache: { fr: 'cache, files', en: 'cache, queues', de: 'Cache, Warteschlangen' },
  archRealtime: { fr: 'temps réel', en: 'real time', de: 'Echtzeit' },
  archCaption: {
    fr: 'Déployé par GitHub Actions sur un VPS, publié sur les stores à chaque tag.',
    en: 'Deployed by GitHub Actions to a VPS, published to the stores on every tag.',
    de: 'Per GitHub Actions auf einen VPS deployt, bei jedem Tag in den Stores veröffentlicht.',
  },
  notFoundTitle: { fr: 'Page introuvable', en: 'Page not found', de: 'Seite nicht gefunden' },
  notFoundText: {
    fr: "Ce lien ne mène nulle part, l'accueil si.",
    en: 'This link leads nowhere. The home page does.',
    de: 'Dieser Link führt ins Leere, die Startseite nicht.',
  },
  home: { fr: 'Accueil', en: 'Home', de: 'Startseite' },
} satisfies Record<string, T>;

/** Chemins publics par langue (le français est à la racine). */
export const routes = {
  home: { fr: '/', en: '/en', de: '/de' } as T,
  cv: { fr: '/cv', en: '/en/cv', de: '/de/cv' } as T,
  project: (slug: string): T => ({ fr: `/projets/${slug}`, en: `/en/projects/${slug}`, de: `/de/projekte/${slug}` }),
};
