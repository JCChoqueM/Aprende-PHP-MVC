import { src, dest } from 'gulp';
import terser from 'gulp-terser';
import concat from 'gulp-concat';
import { paths } from '../config/paths.js';

// Archivos de la raíz → bundle.js
export function js() {
    return src(paths.js, { sourcemaps: true })
        .pipe(concat('bundle.js'))
        .pipe(terser())
        .pipe(dest('./public/build/js', { sourcemaps: '.' }));
}

// Archivos de modules/ → individuales (sin concat)
export function jsModules() {
    return src(paths.jsmodules, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js/modules', { sourcemaps: '.' }));
}

export function jsTemplates() {
    return src(paths.jstemplates, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js/templates', { sourcemaps: '.' }));
}
export function jsRenderers() {
    return src(paths.jsrenderers, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js/renderers', { sourcemaps: '.' }));
}