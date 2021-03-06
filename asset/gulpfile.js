var gulp = require('gulp'),
    cleanCss = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass');

gulp.task('styles', function () {
    return gulp.src('zf-apigility-welcome/css/*.scss')
        .pipe(sass())
        .pipe(cleanCss({keepSpecialComments: 0}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('zf-apigility-welcome/css'));
});

gulp.task('watch', function () {
    gulp.watch('zf-apigility-welcome/css/*.scss', ['styles']);
});

gulp.task('default', ['styles']);
