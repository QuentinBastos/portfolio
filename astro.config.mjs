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
    locales: ['fr', 'en'],
    routing: { prefixDefaultLocale: false },
  },
  integrations: [
    vue(),
    sitemap({
      i18n: { defaultLocale: 'fr', locales: { fr: 'fr-FR', en: 'en-GB' } },
    }),
  ],
  // three.js (~140 Ko gzip) n'est chargé qu'à l'arrivée sur l'île
  vite: { plugins: [tailwindcss()], build: { chunkSizeWarningLimit: 700 } },
});
