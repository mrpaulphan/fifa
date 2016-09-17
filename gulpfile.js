var gulp = require('gulp');
/*
 *  Gulp Plugins
 */
var autoprefixer = require('gulp-autoprefixer');
var browserify = require('gulp-browserify');
var rename = require('gulp-rename');
var scss = require('gulp-sass');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var reload = browserSync.reload;
var shell = require('gulp-shell')
var imagemin = require('gulp-imagemin');

/*
 *    Variables
 */
var paths = {
    "scss": {
        "src": [
            "resources/assets/scss/*.scss",
            "resources/assets/scss/**/*.scss"

        ],
        "dest": "public/assets/css"
    },
    "js": {
        "src": "resources/assets/js/**/*.js",
        "dest": "public/assets/js"
    },
    "images": {
        "src": "resources/assets/images/**/*.jpg",
        "dest": "public/assets/images"
    },
    "fonts": {
        "src": "resources/assets/fonts/",
        "dest": "public/assets/fonts/"
    },
    "svgs": {
        "src": "resources/assets/svgs/",
        "watch": "public/assets/svgs/*.svg",
        "dest": "public/assets/svgs/"
    }
};

var space = " ";

/*
 *  Styles Task
 */
gulp.task('styles', function() {
    gulp.src(paths.scss.src)
        .pipe(plumber())
        .pipe(scss({
            style: 'expanded',
            precision: 5,
            includePaths: [
                'node_modules/normalize.css',
                'node_modules/include-media/dist',
                'resources/assets/scss/layouts'
            ]
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 version', 'ie 11'],
            cascade: false
        }))
        .pipe(rename('screen.css'))
        .pipe(gulp.dest(paths.scss.dest))
        .pipe(browserSync.reload({
            stream: true
        })); // prompts a reload after compilation

});

/*
 *  Scripts Task
 */
gulp.task('scripts', function() {
    gulp.src(paths.js.src)
        .pipe(plumber())

    .pipe(browserify())
        .pipe(gulp.dest(paths.js.dest))
        .pipe(browserSync.reload({
            stream: true
        })); // prompts a reload after compilation

});
gulp.task('images', () =>
    gulp.src(paths.images.src)
        .pipe(imagemin())
        .pipe(gulp.dest(paths.images.dest))
);
/*
 *  Server Task
 */
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: 'http://localhost:4000/',
        port: 4000,
        open: true

    });
});

gulp.task('sync', shell.task([
    'echo "Cleaning up public folder..."',
    'rm -rf ' + paths.fonts.dest + space + paths.svgs.dest,
    'echo "Syncing fonts..."',
    'cp -R ' + paths.fonts.src + ' ' + paths.fonts.dest + '',
    'echo "Syncing svgs..."',
    'cp -R ' + paths.svgs.src + ' ' + paths.svgs.dest + ''
]));


/*
 *  Watch Task
 */
gulp.task('watch', ['browser-sync'], function() {
    gulp.watch(paths.scss.src, ['styles']);
    gulp.watch(paths.js.src, ['scripts']);
    gulp.watch(paths.fonts.src, ['sync']);
    gulp.watch(paths.fonts.src, ['sync']);
    gulp.watch(paths.images.src, ['sync']);
    gulp.watch(paths.svgs.watch, ['sync']);
    gulp.watch(['./templates/**/*.html']).on('change', reload);

});


/*
 *  Build Task
 */
gulp.task('dev', [
    'styles',
    'images',
    'scripts',
    'sync',
    'watch'
]);

/*
 *  Staging Deployment Task
 */
 gulp.task('stage', [
     'styles',
     'scripts',
     'images'
]);
