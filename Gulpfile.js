
"use strict";
/**
 * Imports
 */
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');

/**
 * Sass
 */
function css() {
  return gulp
      .src('assets/sass/load.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: "expanded"}))
      .pipe(cleanCSS())
      .pipe(rename('style.css'))
      .pipe(sourcemaps.write('./assets/sourcemaps'))
      .pipe(gulp.dest('./'));
}

/**
 * Flexible home
 */
function homeCss() {
  return gulp
      .src('assets/sass/loadFlex.scss')
      .pipe(sourcemaps.init())
      .pipe(sass({outputStyle: "expanded"}))
      .pipe(cleanCSS())
      .pipe(rename('flex.css'))
      .pipe(sourcemaps.write('./assets/sourcemaps'))
      .pipe(gulp.dest('./'));
}

/**
 * JavaScript
 */
var jsFiles = [
	'assets/js/scripts.js'
];
function js() {
  return (
    gulp
    .src(jsFiles)
    .pipe(concat('./scripts.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./'))
  );
}

/**
 * admin
 */

gulp.task('admin', function(done) {
  return gulp.src('assets/sass/loadadmin.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(cleanCSS())
      .pipe(rename('style_admin.css'))
      .pipe(gulp.dest('./'));
});

/**
 * Watch Task
 */
function watchFiles() {
  gulp.watch('assets/sass/*.scss', gulp.series(css));
  gulp.watch(jsFiles, gulp.series(js));
  gulp.watch('assets/sass/loadFlex.scss', gulp.series(homeCss));
}

const build = gulp.series(css, js, homeCss);
const watch = gulp.series(watchFiles);

exports.default = build;
exports.watch = watch;