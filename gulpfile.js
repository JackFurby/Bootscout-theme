const { watch, src, dest, series, parallel, task } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
var bourbon = require('bourbon').includePaths;

task('css', function() {
	return src('./theme/scss/site.scss')
		.pipe(sass({
			includePaths: ["styles", "node_modules/susy/sass"].concat(bourbon)
		}))
		.pipe(sourcemaps.init())
		.pipe(sass({ outputStyle: 'expanded' })).on('error', sass.logError)
		.pipe(postcss([autoprefixer(), cssnano()]))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('./theme/css'))
});

task('editor-css', function() {
	return src('./theme/scss/editor.scss')
		.pipe(sass({
			includePaths: ["styles", "node_modules/susy/sass"].concat(bourbon)
		}))
		.pipe(sourcemaps.init())
		.pipe(sass({ outputStyle: 'expanded' })).on('error', sass.logError)
		.pipe(postcss([autoprefixer(), cssnano()]))
		.pipe(sourcemaps.write('.'))
		.pipe(dest('./theme/css'))
});

//exports.default = parallel(cssTask, watchFiles);
//exports.default = parallel(cssTask);
