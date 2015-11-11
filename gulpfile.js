'use strict';

var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var maps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('concatScripts', function(){
    return gulp.src([
            './inc/**.js',
            './js/**.js'])
            .pipe(maps.init())
            .pipe(concat('scripts.js'))
            .pipe(maps.write('./'))
            .pipe(gulp.dest('./assets/js'));
});

gulp.task('minifyScripts', ['concatScripts'], function(){
    return gulp.src('./assets/js/scripts.js')
            .pipe(uglify())
            .pipe(gulp.dest('./assets/js'));
});

gulp.task('browser-sync', function() {
    var files = [
      './style.css',
      './*.php',
      './patternlab/*.mustache'
    ];
    browserSync.init({
        proxy: "salienthealthcare.local/"
    });
});

gulp.task('compileSass', function(){
    return gulp.src('./sass/**/*.scss')
            .pipe(maps.init())
            .pipe(sass({includePaths: require('bourbon').includePaths}))
            .pipe(autoprefixer())
            .pipe(maps.write('./'))
            .pipe(gulp.dest('./'))
            .pipe(reload({stream:true}));
});

gulp.task('watchFiles', function(){
    gulp.watch(['./sass/**/*.scss','./scss/*.scss'],['compileSass']);
        gulp.watch(['./js/**.js','./inc/**/*.js','./assets/**.js'], ['concatScripts']);
});

gulp.task('build', ['minifyScripts', 'compileSass']);

gulp.task('watch', ['watchFiles', 'browser-sync']);

gulp.task('default', ['concatScripts', 'compileSass']);
