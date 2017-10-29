'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('fonts', function() {
    return gulp.src('node_modules/bootstrap-sass/assets/fonts/bootstrap/*')
        .pipe(gulp.dest('css/fonts'))
});

gulp.task('sass', ['fonts'], function () {
    return gulp.src('./src/sass/styles.scss')
        .pipe(sass({includePaths: ['node_modules']}).on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', ['sass'], function () {
    gulp.watch('./src/sass/*.scss', ['sass']);
});
