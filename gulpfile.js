"use strict"

var gulp = require('gulp'),
  concatCss = require('gulp-concat-css'),
  rename = require('gulp-rename'),
  //notify = require('gulp-notify'),
  server = require('gulp-server-livereload'),
  gls = require('gulp-live-server'),
  connect = require('gulp-connect'),
  uncss = require('gulp-uncss'),
  concat = require('gulp-concat'),
  jsmin = require('gulp-jsmin'),
  minifyCss = require('gulp-minify-css');

// server
gulp.task('webserver', function() {
  gulp.src('')
    .pipe(server({
      livereload: true,
      directoryListing: true,
	  defaultFile: 'index.html',
      open: false
    }));
});

// css  
gulp.task('css', function () {
  return gulp.src('css/*.css')
    .pipe(concatCss('bundle.css'))
	.pipe(minifyCss())
	.pipe(rename('bundle.min.css'))
    .pipe(gulp.dest('styles/'))
});

/* uncss */
gulp.task('uncss', function() {
	return gulp.src('css/bootstrap.css')
	.pipe(uncss({
            html: ['index.html']
        }))
	.pipe(rename('bootstrap.min.css'))
    .pipe(gulp.dest('styles/'));
});


/* css
gulp.task('css', function() {
    return gulp.src('css/*.css')
        //.pipe(sass())
        .pipe(concatCss('main.css'))
        .pipe(uncss({
            html: ['index.html']
        }))
        .pipe(minifyCss())
		.pipe(rename('main.min.css'))
        .pipe(gulp.dest('styles/'));
});
*/

// js
gulp.task('scripts', function() {
  return gulp.src('js/lib/*.js')
    .pipe(concat('all.js'))
	.pipe(jsmin())
	.pipe(rename('all.min.js'))
    .pipe(gulp.dest('js/'));
});

// html
gulp.task('html', function () {
	gulp.src('index.html')
	.pipe(webserver.reload());
})

// watch
gulp.task('watch', function () {
	gulp.watch('css/*.css', ['css'])
});

//default
gulp.task('default', ['css', 'scripts', 'html', 'watch'])