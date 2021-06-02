const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applicataion. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/calypso-theme/js/plugins.js', 'public/js')
    .js('resources/calypso-theme/js/common.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sourceMaps()
    .version();

// mix.copyDirectory('node_modules/tinymce/icons', 'public/vendors/tinymce/icons');
// mix.copyDirectory('node_modules/tinymce/plugins', 'public/vendors/tinymce/plugins');
mix.copyDirectory('node_modules/tinymce/skins', 'public/js/skins');
// mix.copyDirectory('node_modules/tinymce/themes', 'public/vendors/tinymce/themes');

mix.browserSync('http://127.0.0.1:8000/');
