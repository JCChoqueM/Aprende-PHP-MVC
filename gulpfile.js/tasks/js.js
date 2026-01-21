import { src, dest } from 'gulp';
import terser from 'gulp-terser';
import concat from 'gulp-concat';
import { paths } from '../config/paths.js';

// Archivos de la raíz → bundle.js
export function js(done) {
    src(paths.js, { sourcemaps: true })
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(dest('./public/build/js', { sourcemaps: '.' }));
    done();
}

// Archivos de modules/ → individuales (sin concat)
export function jsModules(done) {
    src(paths.jsmodules, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js/modules', { sourcemaps: '.' })); // ← Mantiene estructura
    done();
}