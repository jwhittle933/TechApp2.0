const mix = require('laravel-mix');

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

mix.js('resources/js/troubleshooter.js', 'public/js')
    .js('resources/js/access.js', 'public/js')
    .js('resources/js/profile.js', 'public/js')
    .js('resources/js/404error.js', 'public/js')
    .js('resources/js/manage.js', 'public/js');

