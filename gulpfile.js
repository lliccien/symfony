var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer'),
	rename = require('gulp-rename'),
	minifycss = require('gulp-minify-css'),
	scsslint = require('gulp-scss-lint'),
    phpcs = require('gulp-phpcs'),
    phpcbf = require('gulp-phpcbf'),
    gutil = require('gulp-util');


gulp.task('sass', function () {
	return gulp.src('./app/Resources/assets/css/app.scss')
	.pipe(sass({sourceComments: 'map'}))
	.pipe(autoprefixer())
	.pipe(gulp.dest('./web/css/'))
	.pipe(rename({suffix: '.min'}))
	.pipe(minifycss())
	.pipe(gulp.dest('./web/css/'));
});

gulp.task('scsslint', function () {
	return gulp.src('./app/Resources/assets/css/*.scss')
		.pipe(scsslint());
});

gulp.task('phpcs', function () {
    return gulp.src(['./src/AppBundle/Controller/*.php'])
        .pipe(phpcs({
            bin: './bin/phpcs',
            standard: 'PSR2',
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'));
});

gulp.task('phpcbf', function () {
    return gulp.src(['./src/AppBundle/Controller/*.php'])
        .pipe(phpcbf({
            bin: './bin/phpcbf',
            standard: 'PSR2',
            warningSeverity: 0
        }))
        .on('error', gutil.log)
        .pipe(gulp.dest('src/AppBundle/Controller'));
});


gulp.task('watch', function () {
	gulp.watch('./app/Resources/assets/css/**/*.scss', ['sass']);
});