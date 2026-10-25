import { defineConfig } from 'astro/config';
import vue from '@astrojs/vue';
import sitemap from '@astrojs/sitemap';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://www.quentin-bastos.com',
  trailingSlash: 'never',
  build: { format: 'file' },
  i18n: {
    defaultLocale: 'fr',
    locales: ['fr', 'en', 'de'],
    routing: { prefixDefaultLocale: false },
  },
  integrations: [
    vue(),
    sitemap({
      i18n: { defaultLocale: 'fr', locales: { fr: 'fr-FR', en: 'en-GB', de: 'de-CH' } },
    }),
  ],
  // three.js (~140 Ko gzip) est chargé après l'affichage de la page d'accueil
  vite: { plugins: [tailwindcss()], build: { chunkSizeWarningLimit: 700 } },
});
