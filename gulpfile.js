var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');
var minifyCSS   = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var rename      = require('gulp-rename');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
    //watch files
    var files = [
    'web/wp-content/themes/berrydesigntheme/style.css',
    'web/wp-content/themes/berrydesigntheme/*.php'
    ];

    //initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "berrywebdesign.localhost.com",
    notify: false
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src('web/wp-content/themes/berrydesigntheme/styles/scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('web/wp-content/themes/berrydesigntheme/'))
        .pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
    gulp.watch("web/wp-content/themes/berrydesigntheme/styles/scss/*.scss", ['sass']);
});
