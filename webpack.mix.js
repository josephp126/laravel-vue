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

mix
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/calypso/bootstrap.js', 'public/js')
    .js('resources/js/calypso/jquery.js', 'public/js')
    .js('resources/js/calypso/plugins.js', 'public/js')
    .js('resources/js/calypso/common.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()
    .version();


mix.browserSync('http://127.0.0.1:8000/');
