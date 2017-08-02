'use strict'

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('./sass/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);
});

gulp.task('sass:test', function () {
  return gulp.src('./sass/test.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./'));
});
