'use strict';

var gulp = require('gulp'),
fs = require('fs'),
critical = require('critical');

// load plugins
var $ = require('gulp-load-plugins')({
     pattern: '*',
     rename: {
         'gulp-gm': 'gm',
         'run-sequence': 'runSequence',
         'browserSync': 'browser-sync'
        }
   }
);

// preprocess sass
gulp.task('sass', function () {
  return gulp.src('app/assets/css/*.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass({outputStyle: 'expanded'}).on('error', $.sass.logError))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('app/assets/css/'));
});

// autoprefix styles and add hash for cache busting via gulp rev
gulp.task('styles', ['sass'], function() {
  return gulp.src(['app/assets/css/*.css'])
    .pipe($.csso())
    .pipe($.autoprefixer({
      browsers: ['last 2 versions'],
      cascade: true
      }))
    .pipe($.buffer())
    .pipe($.if('**/main.css', $.rev()))
   // .pipe($.rev())      // use gulp-rev for cache busting
    .pipe(gulp.dest('dist/assets/css'))
    .pipe($.rev.manifest({
        base: './',
    }))
    .pipe(gulp.dest('dist/'));
});

// minify and concat all scripts
gulp.task('scripts', ['defer'], function(){
    return gulp.src('app/assets/scripts/*.js')
        // .pipe($.jshint())
        .pipe($.concat('vendor.js'))
        .pipe(gulp.dest('./app/assets/scripts/vendor/'))
        .pipe($.uglify())
        .pipe($.rename('vendor.min.js'))
        // .pipe($.jshint.reporter(require('jshint-stylish')))
        .pipe(gulp.dest('./dist/assets/scripts/vendor/'))
        .pipe($.size());
});

// minify and concat the scripts that can be loaded defered
gulp.task('defer', function(){
    return gulp.src(['app/assets/scripts/defer/*.js', '!app/assets/scripts/defer/defer.js'])
        .pipe($.concat('defer.js'))
        .pipe(gulp.dest('./app/assets/scripts/defer/'))
        .pipe($.uglify())
        .pipe($.rename('defer.min.js'))
        .pipe(gulp.dest('./dist/assets/scripts/defer/'))
        .pipe($.size());
});

// adjust the javascript and css linking so they match their minified version (via regex)
// vendor.js => vendor.min.js
// defer.js => defer.min.js
// main.css => main.min.css
gulp.task('rewrite', function(){
    var data = JSON.parse(fs.readFileSync('dist/rev-manifest.json', 'utf8'));
    return gulp.src(['dist/site/snippets/footer/footer.php', 'dist/site/snippets/header.php'], { base: './' }) //must define base so I can overwrite the src file below. Per http://stackoverflow.com/questions/22418799/can-gulp-overwrite-all-src-files
        .pipe($.if('**/footer.php', $.replace(/<\?php.*echo.*js\(\'assets\/scripts\/vendor\/vendor\.js\'\).*\?>/g, '<?php echo js(\"assets/scripts/vendor/vendor.min.js\") ?>')))
        .pipe($.if('**/footer.php', $.replace(/<\?php.*echo.*js\(\'assets\/scripts\/defer\/defer\.js\'.*\).*\?>/g, '<?php echo js(\"assets/scripts/defer/defer.min.js\", true) ?>')))
        .pipe($.if('**/header.php', $.replace(/<\?php.*echo.*css\(\'assets\/css\/main.css\'.*\).*\?>/g, '<?php echo css(\"assets/css/' + data["main.css"] + '\") ?>')))
        .pipe(gulp.dest('./')); //Write the file back to the same spot.
});

// requires graphicsmagick http://www.graphicsmagick.org/download.html
// brew install graphicsmagick
gulp.task('imageResize', function() {
  gulp.src(['app/assets/images/**/*.jpg', 'app/assets/images/**/*.png'])
    .pipe($.gm(function (gmfile) {
      return gmfile.resize(1920);
    }))
    .pipe(gulp.dest('dist/assets/images/'))
});

gulp.task('images', function () {
    return gulp.src('app/assets/images/**/*')
        .pipe($.size({title: 'Image size', showFiles: 'true'}))
        .pipe($.cache($.imagemin({
            optimizationLevel: 5,
            progressive: true,
            interlaced: true
        })))
        .pipe(gulp.dest('dist/assets/images'))
        .pipe($.size({title: 'Image size after compression', showFiles: 'true'}));
});

gulp.task('copy', function () {
  return gulp.src([
    'app/**/*',
    '!app/assets/scripts/custom.js',
    '!app/assets/scripts/vendor/*',
    '!app/assets/scripts/*',
    '!app/assets/images/**/*.*',
    '!app/assets/css/**/*',
    ],{
     dot:true
    }).pipe(gulp.dest('dist'))
      .pipe($.size({title: 'Copy'}));
});

// generate index.html via curl for inlining the above the fold css
gulp.task('generate-index', function() {
  return $.run('curl http://localhost/kirby/dist/ > dist/index.html').exec();
})

// inline the above the fold
gulp.task('critical', ['generate-index'], function (cb) {
    var data = JSON.parse(fs.readFileSync('dist/rev-manifest.json', 'utf8'));
    critical.generate({
        inline: false,
        base: '.',
        css: ['dist/assets/css/' + data['main.css']],
        src: 'dist/index.html',
        dest: 'dist/assets/css/inline.css',
        minify: true,
        width: 375,
        height: 600
    });
});

// Optimize web fonts
gulp.task('fonts', function () {
    return gulp.src('app/assets/fonts/*')
        .pipe($.filter('**/*.{eot,svg,ttf,woff}'))
        .pipe($.flatten())
        .pipe(gulp.dest('dist/assets/fonts'))
        .pipe($.size());
});

// Clean dist Directory
gulp.task('clean', $.del.bind(null, ['dist']));

// delete the output folder which curl creates
gulp.task('delOutput', $.del.bind(null, ['output']));

// Build Production Files, the Default Task
gulp.task('build', ['clean'], function (cb) {
  $.runSequence(['styles', 'fonts', 'images', 'copy', 'scripts'], ['rewrite', 'critical'], 'delOutput', cb);
});

gulp.task('default',  function () {
    console.log('Please choose npm run build or npm run serve');
});

gulp.task('open', ['styles', 'scripts'], function () {
    require('opn')('http://localhost:80');
});

gulp.task('dev', $.shell.task([
  'php -S localhost:9090',
  'echo "completed"'
  ],{
    verbose: true
}));

gulp.task('watch', function() {
    // watch for changes
    gulp.watch([
        'app/assets/css/**/*.css',
        'app/assets/scripts/**/*.js',
        'app/**/*.php'
    ]).on('change', $.browserSync.reload);

    gulp.watch('app/assets/css/**/*.scss', ['sass']);
    gulp.watch('app/assets/images/**/*', ['images']);
    gulp.watch(['app/assets/scripts/*.js'], ['scripts']);
});

gulp.task('serve', function () {
  $.browserSync({
    proxy: "localhost/kirby/app",
    port: 8080
  });

  // watch for changes
  gulp.watch([
    'app/assets/css/*.css',
    'app/assets/scripts/**/*.js',
    'app/**/*.php'
  ]).on('change', $.browserSync.reload);

  gulp.watch('app/assets/css/**/*.scss', ['sass']);
  gulp.watch('app/assets/images/**/*', ['images']);
  gulp.watch('app/assets/scripts/*.js', ['scripts']);
});
