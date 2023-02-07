const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                
                'crayola-cadet-blue': {
                    DEFAULT: '#9FBCCA',
                    900: '#A9C3CF',
                    800: '#B2C9D5',
                    700: '#BCD0DA',
                    600: '#C5D7DF',
                    500: '#CFDEE5',
                    400: '#D9E4EA',
                    300: '#E2EBEF',
                    200: '#ECF2F4',
                    100: '#F5F8FA',
                },

                'timberwolf': {
                    DEFAULT: '#E3D6D1',
                    900: '#E6DAD6',
                    800: '#E9DEDA',
                    700: '#EBE2DF',
                    600: '#EEE6E3',
                    500: '#F1EBE8',
                    400: '#F4EFED',
                    300: '#F7F3F1',
                    200: '#F9F7F6',
                    100: '#FCFBFA',
                },

                'spanish-grey': {
                    DEFAULT: '#9D9398',
                    900: '#A79EA2',
                    800: '#B1A9AD',
                    700: '#BAB3B7',
                    600: '#C4BEC1',
                    500: '#CEC9CC',
                    400: '#D8D4D6',
                    300: '#E2DFE0',
                    200: '#EBE9EA',
                    100: '#F5F4F5',
                },

                'davy-grey':{
                    DEFAULT: '#4F4C5F',
                    900: '#615E6F',
                    800: '#72707F',
                    700: '#84828F',
                    600: '#95949F',
                    500: '#A7A6AF',
                    400: '#B9B7BF',
                    300: '#CAC9CF',
                    200: '#DCDBDF',
                    100: '#EDEDEF',


                },

                'winter-metallic-seaweed': {
                    DEFAULT: '#167B90',
                    900: '#2D889B',
                    800: '#4595A6',
                    700: '#5CA3B1',
                    600: '#73B0BC',
                    500: '#8BBDC8',
                    400: '#A2CAD3',
                    300: '#B9D7DE',
                    200: '#D0E5E9',
                    100: '#E8F2F4',


                },

                'charm-pink':{
                    DEFAULT: '#ED8CB0',
                },

                'dark-pink':{
                    DEFAULT: '#E65C78',
                },

                'fuchsia-rose':{
                    DEFAULT: '#C44272',
                },

            




            }

        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
