const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/icons.min.scss', 'public/css')
    .sass('resources/sass/theme.min.scss', 'public/css').options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
     })
     .copyDirectory('resources/assets/images', 'public/images');
