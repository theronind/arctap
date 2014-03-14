
// Plugins
// =======================================================

var gulp = require('gulp'),
    prefix = require('gulp-autoprefixer'),
    sass = require('gulp-ruby-sass'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    jshint = require('gulp-jshint'),
    stylish = require('jshint-stylish'),
    livereload = require('gulp-livereload'),
    lr = require('tiny-lr'),
    server = lr();


// Assets
// =======================================================

var paths = {
    sass: 'css/src/',
    css: 'css/',
    js: 'js/',
    img: 'img/'
};

var assets = {
    views: ['**/*.php'],
    sass: [paths.sass + '**/*.scss'],
    css: [paths.css + '**/*.css'],
    js: [paths.js + '*.js'],
    img: [paths.img + '**/**']
};


// Tasks
// =======================================================


gulp.task('default', function() {

    gulp.start('css');

});


gulp.task('css', function() {

    return gulp.src(assets.sass)
        .pipe(sass({
                sourcemap: true,
                compass: false,
                style: 'compressed'
            })
        )
        .pipe(prefix("last 3 version", "> 1%", "ie 8", "ie 7"))
        .pipe(livereload(server))
        .pipe(gulp.dest(paths.css));

});


gulp.task('templates', function() {

    return gulp.src(assets.views)
        .pipe(gulp.dest(''))
        .pipe(livereload(server));

});


gulp.task('jshint', function() {
    gulp.src(assets.js)
    .pipe(jshint({
        lookup: false
    }))
    .pipe(jshint.reporter(stylish));
});


gulp.task('build', function() {

    return gulp.src([])
        .pipe(concat(''))
        .pipe(uglify())
        .pipe(gulp.dest(''));

});


gulp.task('watch', function() {

    server.listen(35729, function (err) {

        if (err) {
            return console.log(err);
        }

        gulp.watch(assets.sass, ['css']);
        gulp.watch(assets.views, ['templates']);
    });

});
