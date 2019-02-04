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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .js('resources/js/validaciones/validacionLibro.js', 'public/js/validaciones/')
   .js('resources/js/validaciones/validacionLogin.js', 'public/js/validaciones/')
   .sass('resources/sass/formularios/formularioLibro.scss', 'public/css/formularios/')
   .js('resources/js/validaciones/validacionRegister.js', 'public/js/validaciones/');


if (mix.inProduction()) {
  mix.version();
}
