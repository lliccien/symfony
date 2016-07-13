var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	rename = require('gulp-rename'),
	minifycss = require('gulp-minify-css');

gulp.task('sass', function () {
	return gulp.src('./app/Resources/assets/css/app.scss')
	.pipe(sass({sourceComments: 'map'}))
	.pipe(autoprefixer())
	.pipe(gulp.dest('./web/css/'))
	.pipe(rename({suffix: '.min'}))
	.pipe(minifycss())
	.pipe(gulp.dest('./web/css/'));
});

gulp.task('watch', function () {
	gulp.watch('./app/Resources/assets/css/**/*.scss', ['sass']);
});