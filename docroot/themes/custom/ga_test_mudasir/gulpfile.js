const gulp = require('gulp');

const config = require('./gulp-tasks/config');

const tasks = [
  'scss',
  'scripts',
  'svg',
  'lint',
  'watch',
  'images',
  'default',
];

tasks.forEach((task) => {
  const t = require(`./gulp-tasks/${task}`);
  t(gulp, config);
});
