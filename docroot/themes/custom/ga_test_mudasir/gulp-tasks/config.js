module.exports = {
  scss: {
    source: ['scss/**/[^_]*.scss'],
    all: ['scss/**/*.scss'],
    destination: 'dist/css',
    options: {
      outputStyle: 'expanded',
      includePaths: ['./node_modules'],
    },
  },
  scripts: {
    source: ['scripts/**/*.js'],
    destination: 'dist/scripts',
  },
  svg: {
    source: ['svg/**/*.svg'],
    destination: 'dist/svg',
  },
  images: {
    source: ['images/**/*'],
    destination: 'dist/images',
  },
  stylelint: {
    options: {
      reporters: [
        {
          formatter: 'verbose',
          console: true,
        },
      ],
      failOnError: process.env.CI === 'true',
    },
  },
  browserSync: {
    proxy: null,
    open: true,
    xip: false,
    logConnections: false,
  },
};
