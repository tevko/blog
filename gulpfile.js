const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const del = require('del');
const nano = require('gulp-cssnano');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();


gulp.task('clean', cb => {
    del(['public/css'], cb);
});

gulp.task('styles', () => {
    return gulp.src('public/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 4 versions']
        }))
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
        }))
        .pipe(nano())
        .pipe(gulp.dest('public/css'))
        .pipe(browserSync.stream());;
});

gulp.task('watch', () => {
    gulp.watch('public/scss/**/*.scss', ['styles']);
});

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'vccw.dev'
    });
});

gulp.task('default', ['browser-sync', 'styles', 'watch']);