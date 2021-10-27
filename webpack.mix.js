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

 const mix = require('laravel-mix');

 mix.js('resources/js/app.js', 'public/js')
     .postCss("resources/css/app.css", "public/css", [
         require("tailwindcss"),
     ])
    .js('resources/js/registration.js', 'public/js/registration.js')
    .js('resources/js/admin/base.js', 'public/js/admin/base.js')
    .js('resources/js/Auth/Login.js', 'public/js/auth/login.js')
    .js('resources/js/admin/user/view.js', 'public/js/admin/user/view.js');
