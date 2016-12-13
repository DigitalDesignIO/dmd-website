'use strict';

var gulp = require('gulp'),
fs = require('fs'),
hash = require('gulp-hash'),
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

gulp.task('styles', ['sass'], function() {
  return gulp.src(['app/assets/css/*.css'])
    .pipe($.csso())
    .pipe($.autoprefixer({
      browsers: ['last 2 versions'],
      cascade: true
      }))
    .pipe($.buffer())
    .pipe($.if('**/main.css', hash()))
    .pipe(gulp.dest('dist/assets/css'))
    .pipe(hash.manifest('styles-manifest.json')) // Switch to the manifest file
    .pipe(gulp.dest('dist/'));
});

// minify and concat all scripts
gulp.task('scripts', ['defer'], function(){
    return gulp.src('app/assets/scripts/*.js')
        .pipe($.concat('vendor.js'))
        .pipe(gulp.dest('./app/assets/scripts/vendor/'))
        .pipe($.uglify())
        .pipe($.rename('vendor.min.js'))
        .pipe(hash())
        .pipe(gulp.dest('./dist/assets/scripts/vendor/'))
        .pipe(hash.manifest('scripts-manifest.json')) // Switch to the manifest file
        .pipe(gulp.dest('dist')) // Write the manifest file
        .pipe($.size());
});

// minify and concat the scripts that can be loaded defered
gulp.task('defer', function(){
    return gulp.src(['app/assets/scripts/defer/*.js', '!app/assets/scripts/defer/defer.js'])
        .pipe($.concat('defer.js'))
        .pipe(gulp.dest('./app/assets/scripts/defer/'))
        .pipe($.uglify())
        .pipe($.rename('defer.min.js'))
        .pipe(hash())
        .pipe(gulp.dest('./dist/assets/scripts/defer/'))
        .pipe(hash.manifest('scripts-manifest.json')) // Switch to the manifest file
        .pipe(gulp.dest('dist')) // Write the manifest file
        .pipe($.size());
});

// adjust the javascript and css linking so they match their minified version (via regex)
// vendor.js => vendor.min.js
// defer.js => defer.min.js
// main.css => main.min.css
gulp.task('rewrite', function(){
    var styles = JSON.parse(fs.readFileSync('dist/styles-manifest.json', 'utf8'));
    var scripts = JSON.parse(fs.readFileSync('dist/scripts-manifest.json', 'utf8'));
    return gulp.src(['dist/site/snippets/footer.php', 'dist/site/snippets/header.php'], { base: './' })
        .pipe($.if('**/footer.php', $.replace(/<\?php.*echo.*js\(\'assets\/scripts\/vendor\/vendor\.js\'.*\).*\?>/g, '<?php echo js(\"assets/scripts/vendor/' + scripts["vendor.min.js"]  + '\") ?>')))
        .pipe($.if('**/footer.php', $.replace(/<\?php.*echo.*js\(\'assets\/scripts\/defer\/defer\.js\'.*\).*\?>/g, '<?php echo js(\"assets/scripts/defer/' + scripts["defer.min.js"] + '\", true) ?>')))
        .pipe($.if('**/header.php', $.replace(/<\?php.*echo.*css\(\'assets\/css\/main.css\'.*\).*\?>/g, '<?php echo css(\"assets/css/' + styles["main.css"] + '\") ?>')))
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
    '!app/assets/scripts/defer/*',
    '!app/assets/images/**/*.*',
    '!app/assets/css/**/*',
    ],{
     dot:true
    }).pipe(gulp.dest('dist'))
      .pipe($.size({title: 'Copy'}));
});

// generate index.html via curl for inlining the above the fold css
gulp.task('generate-index', function() {
  return $.run('curl http://localhost/dmd-website/dist/ > dist/index.html').exec();
})

// inline the above the fold
gulp.task('critical', ['generate-index'], function (cb) {
    var data = JSON.parse(fs.readFileSync('dist/styles-manifest.json', 'utf8'));
    critical.generate({
        inline: false,
        base: 'dist/',
        css: ['dist/assets/css/' + data['main.css']],
        src: 'index.html',
        dest: 'dist/assets/css/inline.css',
        assetPaths: '/assets/',
        minify: true,
        width: 375,
        height: 600,
        ignore: ['@font-face']
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
    proxy: "localhost/dmd-website/app",
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
