module.exports = (gulp, config) => {
  gulp.task('watch', () => {
    gulp.watch(...config.scss.all, gulp.series('lint:scss', 'scss'));
    gulp.watch(...config.scripts.source, gulp.series('lint:scripts', 'scripts'));
  });
};
