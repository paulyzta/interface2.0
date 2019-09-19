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

/*
* Importando os CSSs e JSs do AdminLTE para a public
* */
mix.less('vendor/almasaeed2010/adminlte/bower_components/bootstrap/less/bootstrap.less', 'public/css/vendor')
    .sass('vendor/almasaeed2010/adminlte/bower_components/font-awesome/scss/font-awesome.scss', 'public/css/vendor')
    .sass('vendor/almasaeed2010/adminlte/bower_components/Ionicons/scss/ionicons.scss', 'public/css/vendor')
    .copy('vendor/almasaeed2010/adminlte/dist/css/AdminLTE.min.css', 'public/css/vendor')
    .copy('vendor/almasaeed2010/adminlte/dist/css/skins/skin-blue-light.min.css', 'public/css/vendor')
    .copy('vendor/almasaeed2010/adminlte/bower_components/jquery/dist/jquery.min.js', 'public/js/vendor')
    .copy('vendor/almasaeed2010/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/js/vendor')
    .copy('vendor/almasaeed2010/adminlte/dist/js/adminlte.min.js', 'public/js/vendor')
    .copyDirectory('vendor/almasaeed2010/adminlte/dist/img', 'public/img/vendor/adminLTE');

/*
* Meus scripts
* */
mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
