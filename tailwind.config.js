import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme  : {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            darkMode  : ['selector'],
            colors    : {
                'd-background'      : '#040404',
                'd-surface'         : '#1f1f1f',
                'd-border'          : '#c0c0c0',
                'd-text-primary'    : '#fffbee',
                'd-accent'          : '#d6d6d6',
                'l-background'      : '#eeeeee',
                'l-surface'         : '#fdfdfd',
                'l-border'          : '#bebebe',
                'l-text-primary'    : '#151515',
                'l-accent'          : '#989898',
                'accent-orange'     : '#fb7328',
                'accent-orange-dark': '#e16724',
                'accent-green'      : '#3a8f2c',
                'accent-green-dark' : '#348027',
                'accent-purple'     : '#693690',
                'accent-purple-dark': '#5e3081',
                'accent-blue'       : '#294aa4',
                'accent-blue-dark'  : '#244293',
                'accent-gray'       : '#464d5c',
                'accent-gray-dark'  : '#3f4552'
            }
        },

    },
    plugins: [],
};
