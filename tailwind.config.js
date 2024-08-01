import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                my_sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                my_serif: ['Merriweather', 'serif'],
            },
            colors: {
                my_gray: '#ccc',
                transparent: 'transparent',
                current: 'currentColor',
                primary: {
                    DEFAULT: '#013d9f',
                    50: '#a1c4fe',
                    100: '#6ea5fe',
                    200: '#3b85fe',
                    300: '#0966fd',
                    400: '#0150d2',
                    500: '#013d9f',
                    600: '#013386',
                    700: '#012a6c',
                    800: '#012053',
                    900: '#00163a',
                },
                secondary: '#000000',
            }
        },
    },

    plugins: [forms],

    darkMode: 'selector'
};
