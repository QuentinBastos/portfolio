export const langs = ['fr', 'en'] as const;
export type Lang = (typeof langs)[number];

/** Chaîne bilingue : chaque texte affiché existe dans les deux langues. */
export type T = Record<Lang, string>;

export const ui = {
  navProject: { fr: 'SparkleQuiz', en: 'SparkleQuiz' },
  navWork: { fr: 'Parcours', en: 'Experience' },
  navProjects: { fr: 'Projets', en: 'Projects' },
  navContact: { fr: 'Contact', en: 'Contact' },
  navCv: { fr: 'CV', en: 'Resume' },
  switchLang: { fr: 'English', en: 'Français' },
  switchLangLabel: { fr: 'Voir le site en anglais', en: 'View the site in French' },
  themeLabel: { fr: 'Changer de thème', en: 'Toggle theme' },
  skip: { fr: 'Aller au contenu', en: 'Skip to content' },
  contactMe: { fr: 'Me contacter', en: 'Get in touch' },
  downloadCv: { fr: 'CV en PDF', en: 'Resume (PDF)' },
  readCase: { fr: "Lire l'étude de cas", en: 'Read the case study' },
  seeCode: { fr: 'Voir le code', en: 'View the code' },
  visit: { fr: 'Ouvrir le site', en: 'Open the site' },
  back: { fr: "Retour à l'accueil", en: 'Back to home' },
  copied: { fr: 'Copié', en: 'Copied' },
  copyEmail: { fr: "Copier l'adresse", en: 'Copy address' },
  notFoundTitle: { fr: 'Page introuvable', en: 'Page not found' },
  notFoundText: {
    fr: "Ce lien ne mène nulle part, l'accueil si.",
    en: "This link leads nowhere. The home page does.",
  },
} satisfies Record<string, T>;

/** Chemins publics par langue (le français est à la racine). */
export const routes = {
  home: { fr: '/', en: '/en' },
  cv: { fr: '/cv', en: '/en/cv' },
  project: (slug: string): T => ({ fr: `/projets/${slug}`, en: `/en/projects/${slug}` }),
};

export const other = (lang: Lang): Lang => (lang === 'fr' ? 'en' : 'fr');
