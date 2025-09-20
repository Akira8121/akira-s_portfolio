import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.js',
  ],
  safelist: [
    'rotate-45',
    '-rotate-45',
    'translate-y-2',
    '-translate-y-2',
    'opacity-0',
    'opacity-100',
    'scale-y-95',
    'scale-y-100',
    'max-h-0',
    'max-h-screen',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"M PLUS Rounded 1c"', 'ui-sans-serif', 'system-ui'],
      },
      keyframes: {
        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } }
      },
      animation: {
        fadeIn: "fadeIn 0.3s ease-in-out"
      },
    },
  },
  plugins: [forms],
};
