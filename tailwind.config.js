import { skeleton } from '@skeletonlabs/tw-plugin';
import { join, dirname } from 'path';
import { fileURLToPath } from 'url';
import { myCustomTheme } from './my-custom-theme'

const __dirname = dirname(fileURLToPath(import.meta.url));

/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'selector',
  content: [
    "./**/*.{html,js,jsx,ts,tsx,php}",
    "./index.html",
    join(dirname(fileURLToPath(import.meta.url)), 'node_modules/@skeletonlabs/skeleton/**/*.{html,js,svelte}')
  ],
  plugins: [
    skeleton({
      themes: {
        custom: [
          myCustomTheme
        ],
        preset: [
          {
            name: 'wintry',
            enhancements: true
          }
        ]
      }
    })
  ]
}

