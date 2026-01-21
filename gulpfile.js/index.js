import { watch, series, parallel } from 'gulp';
import browserSync from 'browser-sync';
import path from 'path';
import fs from 'fs';
import { paths } from './config/paths.js';
import { css } from './tasks/css.js';
import { js, jsModules } from './tasks/js.js';
import { imagenes } from './tasks/imagenes.js';
import { clean, cleanCSS, cleanJS, cleanImg } from './tasks/clean.js';

const bs = browserSync.create();

// Servidor con BrowserSync
export function servidor(done) {
    bs.init({
        proxy: 'http://aprende-php-mvc.test/',
        port: 3000,
        files: [
            'public/build/**/*.css',
            'public/build/**/*.js',
            'public/build/img/**/*',
            'views/**/*.php',
            'src/**/*.php'
        ],
        notify: false,
        open: false,
        ghostMode: false,
        reloadDelay: 0,
        reloadDebounce: 300,
        // ⭐ AGREGAR ESTO (deshabilita caché)
        middleware: [
            function (req, res, next) {
                res.setHeader('Cache-Control', 'no-cache, no-store, must-revalidate');
                res.setHeader('Pragma', 'no-cache');
                res.setHeader('Expires', '0');
                next();
            }
        ]
    });
    done();
}

// Función de recarga
function reload(done) {
    bs.reload();
    done();
}

// Watch con manejo de eliminación
export function dev(done) {
    console.log('👀 Observando cambios...');

    // CSS
    watch(paths.scss, series(cleanCSS, css, reload))
        .on('change', filePath => console.log(`📝 SCSS: ${filePath}`));

    // JS raíz → bundle.js
    watch(paths.js, series(cleanJS, js, reload))
        .on('change', filePath => console.log(`📦 JS (bundle): ${filePath}`))
        .on('unlink', filePath => {
            console.log(`🗑️  JS eliminado del bundle: ${filePath}`);
            series(cleanJS, js, reload)(() => { });
        });

    // JS modules/ → individuales
    watch(paths.jsmodules, series(jsModules, reload))
        .on('change', filePath => console.log(`📝 JS (module): ${filePath}`))
        .on('unlink', filePath => {
            console.log(`🗑️  JS Module eliminado: ${filePath}`);

            // Calcular ruta del archivo compilado
            const relativePath = path.relative('src/js/modules', filePath);
            const outputPath = path.join('public/build/js/modules', relativePath);
            const mapPath = outputPath + '.map';

            // Eliminar archivos compilados
            try {
                if (fs.existsSync(outputPath)) {
                    fs.unlinkSync(outputPath);
                    console.log(`   ✓ Eliminado: ${outputPath}`);
                }
                if (fs.existsSync(mapPath)) {
                    fs.unlinkSync(mapPath);
                    console.log(`   ✓ Eliminado: ${mapPath}`);
                }
                bs.reload();
            } catch (error) {
                console.error(`   ✗ Error: ${error.message}`);
            }
        });

    // Imágenes
    watch('src/img/**/*.{png,jpg}', series(cleanImg, imagenes, reload))
        .on('change', filePath => console.log(`🖼️  Imagen: ${filePath}`));

    // PHP
    watch(['views/**/*.php', 'src/**/*.php'], reload)
        .on('change', filePath => console.log(`🐘 PHP: ${filePath}`));

    done();
}

// Exportar tareas individuales
export { css, js, jsModules, imagenes, clean, cleanCSS, cleanJS, cleanImg };

// Tareas compuestas
export const imagen = series(cleanImg, imagenes);
export const build = series(clean, parallel(css, js, jsModules, imagenes));

// Tarea por defecto
export default series(clean, parallel(css, js, jsModules, imagenes), servidor, dev);