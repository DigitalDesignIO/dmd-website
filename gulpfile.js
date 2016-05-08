'use strict';

var credentials = require('./credentials');

var gulp = require('gulp'),
ftp = require( 'vinyl-ftp' ),
sass = require('gulp-sass');

// load plugins
var $ = require('gulp-load-plugins')({
     pattern: '*',
     rename: {
         'run-sequence': 'runSequence',
         'browserSync': 'browser-sync'
        }
   }
);

gulp.task('sass', function () {
  return gulp.src('app/assets/css/*.scss')
    .pipe($.sourcemaps.init())
    .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
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
    .pipe(gulp.dest('dist/assets/css'));
});

gulp.task('useref', function () {
    return gulp.src(['app/site/snippets/header.php', 'app/site/snippets/footer.php'])
        .pipe($.useref({searchPath: 'app/'}))
        .pipe($.if('**/header.php', $.rename('site/snippets/header.php')))
        .pipe($.if('**/footer.php', $.rename('site/snippets/footer.php')))
        .pipe($.if('*.js', $.uglify()))
        .pipe($.if('*.css', $.csso()))
        .pipe(gulp.dest('dist'))
        .pipe($.size());
});

// gulp.task('scripts', function(){
//     return gulp.src('app/scripts/*.js')
//         .pipe($.jshint())
//         .pipe($.uglify())
//         .pipe($.jshint.reporter(require('jshint-stylish')))
//         .pipe($.concat('vendor.js'))
//         .pipe(gulp.dest('./dist/scripts'))
//         .pipe($.size());
// });

gulp.task('rewrite', function(){
   return gulp.src(['dist/site/snippets/header.php', 'dist/site/snippets/footer.php'], { base: './' }) //must define base so I can overwrite the src file below. Per http://stackoverflow.com/questions/22418799/can-gulp-overwrite-all-src-files
        .pipe($.if('**/header.php', $.replace(/<link.*href=\"assets\/css\/main\.min\.css\".*>/g, '<?php echo css(\"assets/css/main.min.css\") ?>')))
        .pipe($.if('**/footer.php', $.replace(/<script.*src=\"scripts\/vendor\.js\".*><\/script>/g, '<?php echo js(\"scripts/vendor.js\", true) ?>')))
        .pipe(gulp.dest('./')); //Write the file back to the same spot. 
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
    '!app/scripts/**/*',
    '!app/assets/images/**/*.*',
    '!app/assets/css/**/*',
    '!app/site/snippets/header.php', // dont copy this file cause it gets rewritten by the rewrite task
    '!app/site/snippets/footer.php' // dont copy this file cause it gets rewritten by the rewrite task
    ],{
     dot:true
    }).pipe(gulp.dest('dist'))
      .pipe($.size({title: 'Copy'}));
});

gulp.task('fonts', function () {
    return gulp.src('app/assets/fonts/*')
        .pipe($.filter('**/*.{eot,svg,ttf,woff}'))
        .pipe($.flatten())
        .pipe(gulp.dest('dist/assets/fonts'))
        .pipe($.size());
});

// Clean Output Directory
gulp.task('clean', $.del.bind(null, ['dist']));

// Build Production Files, the Default Task
gulp.task('build', ['clean'], function (cb) {
  $.runSequence(['useref', 'styles', 'fonts', 'images', 'copy'], 'rewrite', cb);
});

gulp.task('default',  function () {
    console.log('Please choose npm run build, npm run deploy or npm run serve');
});

/*
gulp.task('open', ['styles', 'scripts'], function () {
    require('opn')('http://localhost:80');
});
*/

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
        'app/scripts/**/*.js',
        'app/**/*.php'
    ]).on('change', $.browserSync.reload);

    gulp.watch('app/assets/css/**/*.scss', ['sass']);
    gulp.watch('app/assets/images/**/*', ['images']);
    gulp.watch('app/assets/scripts/**/*.js', ['scripts']); 
});

gulp.task('serve', function () {
  $.browserSync({
    proxy: "localhost/kirby/app",
    port: 8080
  });

  // watch for changes
  gulp.watch([
    'app/assets/css/**/*.css',
    'app/scripts/**/*.js',
    'app/**/*.php'
  ]).on('change', $.browserSync.reload);

  gulp.watch('app/assets/css/**/*.scss', ['sass']);
  gulp.watch('app/assets/images/**/*', ['images']);
  gulp.watch('app/assets/scripts/**/*.js', ['scripts']);
});

gulp.task( 'deploy', function () {

    var conn = ftp.create( {
        host: credentials.getHost,
        user: credentials.getUser,
        password: credentials.getPassword,
        parallel: 10,
        log: $.util.log
    } );

    var globs = [
        'dist/**',
        '!dist/content/**'
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src( globs, { cwd: 'htdocs/test.digitaldesign.io', buffer: false } )
        .pipe( conn.newer( '/test.digitaldesign.io' ) ) // only upload newer files
        .pipe( conn.dest( '/test.digitaldesign.io' ) );

});
