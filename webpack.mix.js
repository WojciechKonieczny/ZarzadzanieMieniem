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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/form.scss', 'public/css')
    .copy('resources/views/vendor/datatables/i18n/pl.json', 'public/vendor/datatables/i18n')  // wtyczka nie ma dostepu do katalogu resources, wiec musimy przerzucic pliki tlumaczen do publica
    .sourceMaps()
    // rozbicie kompilacji js
    .extract();
