/*
    gulp all fonts for production
*/

var gulp = require('gulp');

var fontsTask = function() {
  return gulp.src('./assets/fonts/*') // fonts to be bundled

    .pipe(gulp.dest('production/assets/fonts')); // directory to be placed in
};

gulp.task('fontsTask', fontsTask);

module.exports = fontsTask;
