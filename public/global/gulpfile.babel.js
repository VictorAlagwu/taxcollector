import config from './config';
import gulp from 'gulp';
import gutil from 'gulp-util';
import requiredir from 'require-dir';

gutil.log(gutil.colors.bold(`ℹ  ${config.name} v${config.version}`));

if (config.production) {
  gutil.log(gutil.colors.bold.green('🚚  Production Mode'));
} else {
  gutil.log(gutil.colors.bold.green('🔧  Development Mode'));
}
requiredir('./tasks');

gulp.task(
  'dist',
  gulp.series('make:styles', 'make:scripts', 'vendor', 'fonts', 'images')
);

gulp.task(
  'clean',
  gulp.series('clean:styles', 'clean:scripts', /*'clean:vendor',*/ 'clean:fonts', 'clean:images')
);
gulp.task('build', gulp.series('clean', 'dist'));
gulp.task('dev', gulp.series('build', gulp.parallel('watch')));
gulp.task('default', gulp.series('dev'));
