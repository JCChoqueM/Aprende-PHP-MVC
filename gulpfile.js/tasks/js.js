import { src, dest } from 'gulp';
import terser from 'gulp-terser';
import concat from 'gulp-concat';
import { paths } from '../config/paths.js';

export function js(done) {
    src(paths.js, { sourcemaps: true })
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(dest('./public/build/js', { sourcemaps: '.' }));
    done();
}

export function jsModules(done) {
    src(paths.jsmodules, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js', { sourcemaps: '.' }));
    done();
}