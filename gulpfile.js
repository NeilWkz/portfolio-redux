var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    rename      = require('gulp-rename'),
    cssmin      = require('gulp-minify-css'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    jshint      = require('gulp-jshint'),
    cache       = require('gulp-cached'),
    prefix      = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    reload      = browserSync.reload,
   // minifyHTML  = require('gulp-minify-html'),
    size        = require('gulp-size'),
    imagemin    = require('gulp-imagemin'),
    pngquant    = require('imagemin-pngquant'),
    plumber     = require('gulp-plumber'),
    notify      = require('gulp-notify'),
    twig        = require('gulp-twig');


gulp.task('scss', function() {
    var onError = function(err) {
      notify.onError({
          title:    "Gulp",
          subtitle: "Failure!",
          message:  "Error: <%= error.message %>",
          sound:    "Beep"
      })(err);
      this.emit('end');
  };

  return gulp.src('src/scss/style.scss')
    .pipe(plumber({errorHandler: onError}))
    .pipe(sass())
    .pipe(size({ gzip: true, showFiles: true }))
    .pipe(prefix())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('dist/css'))
    .pipe(reload({stream:true}))
    .pipe(cssmin())
    .pipe(size({ gzip: true, showFiles: true }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('dist/css'))
});

gulp.task('browser-sync', function() {
    browserSync({
        server: {
            baseDir: "./dist"
        }
    });
});


gulp.task('js', function() {
  gulp.src('src/js/*.js')
   gulp.src([
        'src/js/jquery.validate.min.js',
        'src/js/TweenMax.min.js',
        'src/js/ie10.js',
        'src/js/main.js'
    ])
    .pipe(uglify())
    .pipe(size({ gzip: true, showFiles: true }))
    .pipe(concat('dist/js/j.js'))
    .pipe(gulp.dest(''))
    .pipe(reload({stream:true}));
});


gulp.task('minify-html', function() {
    var opts = {
      comments:true,
      spare:true
    };

  gulp.src('./*.html')
    .pipe(minifyHTML(opts))
    .pipe(gulp.dest('dist/'))
    .pipe(reload({stream:true}));
});

gulp.task('jshint', function() {
  gulp.src('js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('default'));
});
// Compile Twig templates to HTML
gulp.task('templates', function() {
    return gulp.src('src/views/*.twig') // run the Twig template parser on all .twig files in the "src" directory
        .pipe(twig({
          extname:'.php'
        }))
        .pipe(gulp.dest('dist')); // output the rendered HTML files to the "dist" directory
});

gulp.task('watch', function() {
  gulp.watch('src/scss/**/*.scss', ['scss']);
  gulp.watch('src/js/*.js', ['jshint', 'js']);
  gulp.watch('./*.html', ['minify-html']);
  gulp.watch('images/*', ['imgmin']);
  gulp.watch('views/*', ['templates']);
});

gulp.task('imgmin', function () {
    return gulp.src('img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('dist/img'));
});

gulp.task('default', [ 'js', 'imgmin', 'scss', 'templates', 'watch']);