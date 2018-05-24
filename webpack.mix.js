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
   .combine([
   			'node_modules/bulma/css/bulma.css',
   			'node_modules/bulma-pricingtable/dist/bulma-pricingtable.min.css',
   			'node_modules/slick-carousel/slick/slick.css',
   			'node_modules/slick-carousel/slick/slick-theme.css',
   		], 'public/css/default.css')
   .sass('resources/assets/sass/app.scss', 'public/css');
