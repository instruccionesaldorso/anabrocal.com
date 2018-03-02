
// Load plugins
var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    babel = require('gulp-babel');

var buildPath = 'resources';
var targetPath = '../web/build';

// error handling
function handleError(err) {
    console.log('ERROR HANDLER: ', err.toString());
    this.emit('end');
}

gulp.task('styles:build', function () {
    return gulp.src(buildPath + '/sass/*.scss')

        .pipe(sass().on('error', sass.logError))
        .on('error', handleError)

        .pipe(autoprefixer({
            browserslist: [
                'last 2 version',
                'BlackBerry'
            ]
        }))
        .on('error', handleError)

        .pipe(cssnano({
            reduceIdents: false
        }))
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/css'))
        .on('error', handleError);
});

gulp.task('scripts:vendor', function () {
    return gulp.src([
        buildPath + '/js/vendor/*.js'
    ])
        .pipe(concat('vendor.js'))
        .on('error', handleError)

        .pipe(uglify())
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/js'))
        .on('error', handleError);
});

gulp.task('scripts:build', function () {
    return gulp.src([
        '!' + buildPath + '/js/vendor/*.js',
        buildPath + '/js/*/**/*.js',
        buildPath + '/js/*.js',
    ])
        .pipe(babel({
            presets: ['es2015']
        }))
        .on('error', handleError)

        .pipe(concat('app.js'))
        .on('error', handleError)

        .pipe(uglify())
        .on('error', handleError)

        .pipe(gulp.dest(targetPath + '/js'))
        .on('error', handleError);
});

gulp.task('default', function () {
    gulp.start('styles:build', 'scripts:vendor', 'scripts:build');
});
