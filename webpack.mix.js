const mix = require("laravel-mix");

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

mix.js("resources/js/Support.js", "public/kih-files/js")
    .vue()
    .js("resources/js/Join.js", "public/kih-files/js")
    .vue()
    .js("resources/js/donate_monthly.js", "public/kih-files/js")
    .vue();
