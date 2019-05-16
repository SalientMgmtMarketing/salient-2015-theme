'use strict';

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var maps = require('gulp-sourcemaps');
var cssnano = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('concatScripts', function () {
  return gulp.src([
    '!./assets/js/scripts.js',
    './js/navigation.js',
    './node_modules/js-cookie/src/js.cookie.js',
    './js/flickity.pkgd.min.js',
    './js/fancybox/**/*.js',
    './js/**/*.js',
    './inc/**/*.js',
    '!./js/customizer.js'
  ])
    .pipe(maps.init())
    .pipe(concat('scripts.js'))
    .pipe(maps.write('./'))
    .pipe(gulp.dest('./assets/js'));
});

gulp.task('concatScriptsFooter', function () {
  return gulp.src([
    'node_modules/gsap/src/minified/TweenMax.min.js',
    'node_modules/scrollmagic/scrollmagic/minified/ScrollMagic.min.js',
    'node_modules/scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js',
    'assets/js/footer.js',
    'assets/js/homepage-slides.js',
    'assets/js/homepage-tabs.js'
  ])
    .pipe(maps.init())
    .pipe(concat('scripts-footer.js'))
    .pipe(maps.write('./'))
    .pipe(gulp.dest('./assets/js'));
});

gulp.task('minifyScripts', gulp.series( 'concatScripts' , function () {
  return gulp.src('./assets/js/scripts.js')
    .pipe(uglify())
    .pipe(gulp.dest('./assets/js'));
}));

gulp.task('browser-sync', function () {
  browserSync.init({
    proxy: 'https://marginminder.dev/', notify: false
  });
});

gulp.task('compileSass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(maps.init())
    .pipe(sass({includePaths: require('bourbon').includePaths}))
    .pipe(autoprefixer())
    .pipe(cssnano())
    .pipe(maps.write('./'))
    .pipe(gulp.dest('./'))
    .pipe(reload({stream:true}));
});

gulp.task('watchFiles', function(){
  gulp.watch( ['./sass/**/*.scss','./scss/*.scss'],gulp.series( ['compileSass'] ) );
  gulp.watch( ['./js/**.js','./inc/**/*.js','./assets/**.js'], gulp.series( ['concatScripts'] ) );
});






gulp.task('build', gulp.series( 'concatScripts','minifyScripts', 'compileSass') );

gulp.task('watch', gulp.series( 'watchFiles') );

gulp.task('watch-sync', gulp.series( 'watchFiles', 'browser-sync') );

gulp.task('default', gulp.series( 'concatScripts', 'compileSass' ) );
