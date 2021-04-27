module.exports = (gulp) =>
  gulp.task(
    'default',
    gulp.series(
      gulp.parallel('scss', 'scripts', 'lint', 'svg', 'images'),
    ),
  );
