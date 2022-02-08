const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync').create();
// below two are to get srouce map
// const mmq = require('gulp-merge-media-queries');
// const cleanCSS = require('gulp-clean-css');


//compile sass into css
function style() {
    //Source sass file
    return gulp.src('./assets/scss/**/*.scss')

    //intitialize soucemaps
    .pipe(sourcemaps.init())

    //pass sass to compiler
    .pipe(sass().on('error', sass.logError))

    // .pipe(autoprefixer('last 2 versions'))
    .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))

    // Merge media Queries

    // .pipe(mmq({
    //     log: true
    // }))

    //Clean css

    // .pipe(cleanCSS({ compatibility: 'ie8' }))

    //update sourcemaps file
    .pipe(sourcemaps.write(''))

    //write to css file
    .pipe(gulp.dest('./assets/css'))



    //stream changes
    .pipe(browserSync.stream());


}

function watch() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    });
    gulp.watch('./assets/scss/**/*.scss', style);
    gulp.watch('./assets/scss/**/*.scss', browserSync.reload);
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('http://localhost/max/scott-ferguson/*.php').on('change', browserSync.reload);
    gulp.watch('./assets/js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;