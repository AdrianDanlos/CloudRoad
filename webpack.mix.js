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
// los archivos sass
mix.js('resources/js/app.js', 'public/js')
    //modo nocturno
    .sass('resources/sass/appDarkMode.scss', 'public/css')
    //modo diurno
    .sass('resources/sass/app.scss', 'public/css');

// los archivos TypeScript
mix.ts('resources/js/prueba.ts', 'public/js');

