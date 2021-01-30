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

// mix.setPublicPath('public/build')
//     .copy('resources/img', 'public/build/img');

mix.setPublicPath('../../../public/vendor/core/build')
    .copy('resources/img', '../../../public/vendor/core/build/img');

mix.setResourceRoot('/vendor/core/build/')
    .sass('resources/sass/admin.scss', 'css')
    .js('resources/js/admin.js', 'js');
//
// mix.setPublicPath('public/build');
// mix.sass('resources/sass/admin.scss', 'css')
//     .js('resources/js/admin.js', 'js');