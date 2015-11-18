var elixir = require('laravel-elixir');
var gulp = require('gulp');
var del = require('del');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
	'jquery': './node_modules/jquery/',
	'bootstrap': './node_modules/bootstrap-sass/assets/',
    'fontawesome': './node_modules/font-awesome/'
}

elixir(function(mix) {
    /**
     * Theme realted
     **/
    // SASS and CSS
    mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/', paths.fontawesome + 'css/']});

    // Theme fonts
    mix.copy(paths.bootstrap + 'fonts/**', 'public/fonts');
    mix.copy(paths.fontawesome + 'fonts/**', 'public/fonts');

    /**
     * JS Section
     **/

    // Common JS
    mix.scripts([
        paths.jquery + "dist/jquery.js",
        paths.bootstrap + "javascripts/bootstrap.js"
    ], './public/js/app.js');
});

gulp.task('clean', function() {
    return del([
        'public/css/**/*',
        'public/js/**/*',
        'public/fonts/**/*',
    ]);
});
