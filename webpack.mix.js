/*----- Webpack compiler ------ */
const mix = require('laravel-mix');

/* SCSS */
mix.sass('wp-content/themes/SEF/ressources/style.scss',
    'wp-content/themes/SEF/public/css').options({
    processCssUrls: false,
});