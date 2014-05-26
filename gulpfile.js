var gulp = require('gulp');
var inject = require('gulp-inject');
var gulpBowerFiles = require('gulp-bower-files');

/**
 *
 *
 * @type {string}
 */

var publicComponents = './public/bower_components/';

var indexFile = './app/views/index.blade.php';

var angularScripts = './app/views/includes/angularscripts.blade.php';

var laravelViews = './app/views/';

var angularFiles = './public/angular/**/*.js';
/**
 *
 *
 *
 */
gulp.task('copy', function(){
    gulpBowerFiles().pipe(gulp.dest(publicComponents));
    gulpBowerFiles()
        .pipe(inject(indexFile))
        .pipe(gulp.dest(laravelViews));
});

gulp.task('script', function(){
    gulp.src(angularScripts)
        .pipe(inject(gulp.src(angularFiles), {ignorePath: '/public/'}))
        .pipe(gulp.dest(laravelViews));
});
