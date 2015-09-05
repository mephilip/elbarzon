var pkg = require('./package.json'),
    fs = require('fs'),
    gulp = require('gulp'),
    sass = require('gulp-sass'),
    cmq = require('gulp-combine-media-queries'),
    autoprefixer = require('gulp-autoprefixer'),
    cssmin = require('gulp-cssmin'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    cp = require('child_process');



 
///////////////////////
// sass
///////////////////////
function doSass (cb) {
  gulp.src(['./scss/**/*.scss','!_*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(cmq())
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css/'))
    .pipe(cssmin())
    .pipe(rename({
      extname: '.min.css'
    }))
    .pipe(gulp.dest('./css/'))
    .on('end', function () {
      if (cb && typeof cb === 'function')
        cb();
    });
}
gulp.task('sass',doSass);


///////////////////////
// watch
///////////////////////
function doWatch (cb) {
  gulp.watch('./scss/**/*.scss',['sass']);
  if (cb && typeof cb === 'function')
    cb();
}
gulp.task('watch',doWatch);
