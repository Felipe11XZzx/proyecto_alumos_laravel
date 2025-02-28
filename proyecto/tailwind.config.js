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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            // ESTILOS DE ALTURAS.
            height: {
                "10v" : "10vh",
                "15v" : "15vh",
                "65v" : "65vh"
            },
            // COLORES DE COMPONENTES.
            colors: {
                "header": "#CA3C25",
                "nav": "#FFFBBD",
                "main": "#E6AA68",
                "footer": "#7FB069",
                "buttons" : "#ff9f33"
            }
        },
    },

    plugins: [forms, require('daisyui')],
};
