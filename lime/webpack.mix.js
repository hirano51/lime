const mix = require('laravel-mix');
const glob=require('glob');
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
 glob.sync('resources/css/*.css').map(function(file) {
    mix.css(file, 'public/css').options({
        processCssUrls: false
    });
});

glob.sync('resources/js/*.js').map(function(file) {
    mix.js(file, 'public/js')
    .sourceMaps()
    .autoload({
        "jquery":['$','window.jQuery'],
    });
});
// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);
