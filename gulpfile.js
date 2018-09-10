'use strict';
const gulp = require('gulp');
const less = require('gulp-less');
const watch = require('gulp-watch');
const LessAutoprefix = require('less-plugin-autoprefix');
const autoprefix = new LessAutoprefix({
    browsers: ['last 2 versions']
});
const browserSync = require('browser-sync').create();
gulp.task('default', function () {
    // 将你的默认的任务代码放在这
    console.log('hello world')
});
//less预编译样式文件
gulp.task('less', function () {
    return gulp.src('./app/style/less/**/*.less')
        .pipe(less({
            plugins: [autoprefix],
        }))
        .pipe(gulp.dest('./app/style/min/'))
});
//浏览器自动刷新
gulp.task('browser-sync', function () {
    browserSync.init({
        server: "./app"
    });
    gulp.watch('./app/style/less/**/*.less', ['less']);
    gulp.watch('./app/style/min/**/*.*').on('change', function () {
        browserSync.reload()
    })
    gulp.watch('./app/*.html').on('change', function () {
        browserSync.reload()
    })
});
gulp.task('default', ['less']);