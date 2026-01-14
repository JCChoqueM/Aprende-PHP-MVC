// src() → tomar archivos de entrada (js, scss, imágenes) para procesar
// dest() → guardar los archivos procesados en la carpeta de salida
// symlink() → crear enlaces simbólicos en lugar de copiar archivos
// lastRun() → procesar solo los archivos que cambiaron desde la última ejecución  src(paths.js, { since: lastRun(js) })
// series() → ejecutar tareas en orden, una después de otra
// parallel() → ejecutar tareas al mismo tiempo, sin esperar a la otra
// watch() → observar cambios en archivos y ejecutar tareas automáticamente
// task() → registrar tareas manualmente (útil en compatibilidad o legacy)
// tree() → mostrar el árbol de tareas y sus dependencias
// Vinyl → objeto interno que representa cada archivo en el flujo de Gulp
// Vinyl.isVinyl() → comprobar si un objeto es un archivo Vinyl
// Vinyl.isCustomProp() → verificar propiedades especiales agregadas a un Vinyl

import { src, dest, watch, series, lastRun } from 'gulp' // Funciones principales de Gulp
import path from 'path'                 // Manejo seguro de rutas (multiplataforma)
import fs from 'fs'                     // Acceso al sistema de archivos
import { glob } from 'glob'             // Búsqueda de archivos por patrones
import * as dartSass from 'sass'         // Motor oficial de Sass (Dart Sass)
import gulpSass from 'gulp-sass'         // Integración de Sass con Gulp
import terser from 'gulp-terser'         // Minificación de JavaScript
import sharp from 'sharp'                // Optimización y conversión de imágenes


const sass = gulpSass(dartSass)

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js'
}

export function css(done) {
    src(paths.scss, { sourcemaps: true })
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(dest('./public/build/css', { sourcemaps: '.' }));
    done()
}

export function js(done) {
    src(paths.js, { sourcemaps: true })
        .pipe(terser())
        .pipe(dest('./public/build/js', { sourcemaps: '.' }))
    done()
}

export async function imagenes(done) {
    const srcDir = './src/img';
    const buildDir = './public/build/img';
    const images = await glob('./src/img/**/*')

    images.forEach(file => {
        const relativePath = path.relative(srcDir, path.dirname(file));
        const outputSubDir = path.join(buildDir, relativePath);
        procesarImagenes(file, outputSubDir);
    });
    done();
}

function procesarImagenes(file, outputSubDir) {
    if (!fs.existsSync(outputSubDir)) {
        fs.mkdirSync(outputSubDir, { recursive: true })
    }
    const baseName = path.basename(file, path.extname(file))
    const extName = path.extname(file)

    if (extName.toLowerCase() === '.svg') {
        // If it's an SVG file, move it to the output directory
        const outputFile = path.join(outputSubDir, `${baseName}${extName}`);
        fs.copyFileSync(file, outputFile);
    } else {
        // For other image formats, process them with sharp
        const outputFile = path.join(outputSubDir, `${baseName}${extName}`);
        const outputFileWebp = path.join(outputSubDir, `${baseName}.webp`);
        const outputFileAvif = path.join(outputSubDir, `${baseName}.avif`);
        const options = { quality: 80 };

        sharp(file).jpeg(options).toFile(outputFile);
        sharp(file).webp(options).toFile(outputFileWebp);
        sharp(file).avif().toFile(outputFileAvif);
    }
}

export function dev() {
    watch(paths.scss, css);
    watch(paths.js, js);
    watch('src/img/**/*.{png,jpg}', imagenes)
}

export default series(js, css, imagenes, dev)