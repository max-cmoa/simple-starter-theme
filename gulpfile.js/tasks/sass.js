/*
    compile sass to css for production
*/

var gulp = require('gulp');
var sass = require('gulp-sass');

// require meaning use dart-sass instead of node-sass
sass.compiler = require('dart-sass');

// sass is for local development only, in production we just use css/main.css
var sassTask = function() {
  return gulp.src('./assets/sass/main.scss') // compile sass file
    .pipe(sass().on('error', sass.logError)) // compile sass to css
    .pipe(gulp.dest('assets/css')); // directory to place main.css in
};

gulp.task('sassTask', sassTask);

module.exports = sassTask;
