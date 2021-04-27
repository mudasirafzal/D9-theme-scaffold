
module.exports = (gulp, config) => {
  gulp.task('scripts', () =>
    gulp
      .src(config.scripts.source)
      .pipe(gulp.dest(config.scripts.destination)),
  );
};
