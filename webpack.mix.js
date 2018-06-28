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
   .sass('resources/assets/sass/app.scss', 'public/css');
//    .copy('node_modules/mdbootstrap/css', 'public/mdbootstrap/css')
//    .copy('node_modules/mdbootstrap/js', 'public/mdbootstrap/js');
   mix.browserSync();

   mix.browserSync('127.0.0.1:8000',{
    files: [
        'app/**/*',
        'public/**/*',
        'resources/views/**/*',
        'resources/lang/**/*',
        'routes/**/*'
    ],
    proxy: 'my-domain.dev',
    notify: false,
    open: false
});