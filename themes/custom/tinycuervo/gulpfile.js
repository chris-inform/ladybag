var gulp = require('gulp'),
	sass = require('gulp-sass'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	minifyCSS = require('gulp-minify-css'),
	livereload = require('gulp-livereload');

gulp.task('scripts', function () {

    gulp.src([
            'js/vendor/bootstrap.bundle.min.js',
            'js/main.js'
            ])
	.pipe(concat('app.js'))
    // .pipe(uglify())
    .pipe(gulp.dest('js/'))
    .pipe(livereload());

});

gulp.task('sass', function() {
    gulp.src('css/scss/**/app.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css/'))
        .pipe(minifyCSS())
        .pipe(livereload());
});

//Watch task
gulp.task('default',function() {
	livereload.listen();
    gulp.watch('css/scss/**/*.scss',['sass']);
    gulp.watch('js/main.js',['scripts']);
});