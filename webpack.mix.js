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

const asset_version = process.env.MIX_ASSET_VER

mix.js('resources/js/app.js', `public/js/${asset_version}/app.js`)
    .sass('resources/css/app.scss', 'public/css')
    .version();
