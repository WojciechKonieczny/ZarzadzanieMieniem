const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/*.js', 'public/js')
    .js('resources/js/global.js', 'public/js')
    .js('resources/js/manufacturers.js', 'public/js')
    .js('resources/js/models_or_names.js', 'public/js')
    .js('resources/js/categories.js', 'public/js')
    .js('resources/js/items.js', 'public/js')
    .js('resources/js/users.js', 'public/js')
    .js('resources/js/inventory.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/manufacturers.scss', 'public/css')
    .sass('resources/sass/models_or_names.scss', 'public/css')
    .sass('resources/sass/categories.scss', 'public/css')
    .sass('resources/sass/items.scss', 'public/css')
    .sass('resources/sass/users.scss', 'public/css')
    .sass('resources/sass/inventory.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .copy('resources/views/vendor/datatables/i18n/pl.json', 'public/vendor/datatables/i18n')  // wtyczka nie ma dostepu do katalogu resources, wiec musimy przerzucic pliki tlumaczen do publica
    .copy('vendor/proengsoft/laravel-jsvalidation/resources/views', 'resources/views/vendor/jsvalidation')
    .copy('vendor/proengsoft/laravel-jsvalidation/public', 'resources/js/vendor/jsvalidation')
    .sourceMaps()
    // rozbicie kompilacji js
    .extract();
