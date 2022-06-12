const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js'
    
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'main-bg': "url(https://hireapitch.com/content/images/home_hero.jpg)",
                'footer-texture': "url('/img/footer-texture.png')",
              }
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography'),require('tw-elements/dist/plugin'),require("daisyui"),  require('flowbite/plugin')],
};
