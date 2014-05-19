var gulp = require('gulp');
/**
 *
 * Theme on bower component
 * bootswatch
 * @type {string}
 */
var theme = 'yeti';
/**
 *
 * Bower components
 * @type {string}
 */
var bc = './bower_components/';
/**
 *
 * Public destination folder
 * @type {string}
 */
var assets = './public/assets/';

var paths = {
    jquery: {
        source: bc + 'jquery/dist/*.js',
        destination: assets + 'jquery/'
    },
    bootstrap: {
        css: {
            source: bc + 'bootswatch/' + theme + '/*.css',
            destination: assets + 'bootstrap/css/'
        },
        js: {
            source: bc + 'bootstrap/dist/js/*.js',
            destination: assets + 'bootstrap/js/'
        }
    },
    angular: {
        source: bc + 'angular/*.js',
        destination: assets + 'angular/'
    },
    angularbootstrap: {
        source: bc + 'angular-bootstrap/*.js',
        destination: assets + 'angular-bootstrap/'
    }
};

gulp.task('copy', function(){
    gulp.src(paths.jquery.source).pipe(gulp.dest(paths.jquery.destination));
    gulp.src(paths.bootstrap.css.source).pipe(gulp.dest(paths.bootstrap.css.destination));
    gulp.src(paths.bootstrap.js.source).pipe(gulp.dest(paths.bootstrap.js.destination));
    gulp.src(paths.angular.source).pipe(gulp.dest(paths.angular.destination));
    gulp.src(paths.angularbootstrap.source).pipe(gulp.dest(paths.angularbootstrap.destination))
});


gulp.task('default', ['copy']);