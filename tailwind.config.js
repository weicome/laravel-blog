import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import daisyui from "daisyui";


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./vendor/robsontenorio/mary/src/View/Components/**/*.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms,require("daisyui")],
    daisyui: {
        themes: ['light','dark','cupcake'],
        darkTheme: 'dark',
        base: true,
        styled: true,
        utils: true,
        logs: true,
        prefix: 'ds',

    }
};
