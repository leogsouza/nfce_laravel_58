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

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
*/
mix
    .styles([
        'resources/views/assets/css/auxiliar.css',
        'resources/views/assets/css/estilo-login.css',
        'resources/views/assets/css/estilo-modal.css',
        'resources/views/assets/css/estilo-tabela.css',
        'resources/views/assets/css/grade.css',
        'resources/views/assets/css/style.css',
    ], 'public/assets/css/app.css')
    .styles([
        'resources/views/assets/js/datatables/css/jquery.dataTables.min.css',
        'resources/views/assets/js/datatables/css/responsive.dataTables.min.css',
        'resources/views/assets/js/datatables/css/style_dataTables.css',
    ], 'public/assets/js/datatables/css_datatables.css')
    .scripts([
        'resources/views/assets/js/jquery.min.js'
    ], 'public/assets/js/jquery.js')
    .scripts([
        'resources/views/assets/js/js.js'
    ], 'public/assets/js/js.js')
    .scripts([
        'resources/views/assets/js/jquery.mask.js'
    ], 'public/assets/js/biblio.js')
    .scripts([
        'resources/views/assets/js/datatables/js/jquery.dataTables.min.js',
        'resources/views/assets/js/datatables/js/dataTables.responsive.min.js',
    ], 'public/assets/js/datatables/js_datatables.js')
    .scripts([
        'resources/views/assets/js/componentes/js_data_table.js',
        'resources/views/assets/js/componentes/js_mascara.js',
        'resources/views/assets/js/componentes/js_modal.js',
    ], 'public/assets/js/componentes.js')
    .copyDirectory('resources/views/assets/js/datatables/images', 'public/assets/js/datatables/images')
    .copyDirectory('resources/views/assets/img', 'public/assets/img')
