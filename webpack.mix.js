let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .version();

mix.scripts([
    'public/js/jquery.js',
    'public/js/plugins.js',
    'public/js/functions.js',
], 'public/js/all.js');

mix.styles([
    'public/css/bootstrap.css',
    'public/css/dark.css',
    'public/css/font-icons.css',
    'public/css/animate.css',
    'public/css/magnific-popup.css',
    'public/css/calendar.css',
    'public/css/responsive.css',
], 'public/css/all.css');

