import { watch, series, parallel } from 'gulp';
import path from 'path';
import fs from 'fs';

// Configuración
import { paths } from './config/paths.js';

// Tareas
import { css } from './tasks/css.js';
import { js, jsModules } from './tasks/js.js';
import { imagenes } from './tasks/imagenes.js';
import { clean, cleanCSS, cleanJS, cleanImg } from './tasks/clean.js';
import { servidor, reload, streamCSS } from './tasks/servidor.js';

/**
 * Tarea de observación (watch)
 */
export function dev(done) {
    console.log('👀 Observando cambios...');

    // CSS - Con stream (más rápido, sin recargar página)
    watch(paths.scss, series(cleanCSS, css))
        .on('change', filePath => {
            console.log(`📝 SCSS: ${filePath}`);
        })
        .on('all', streamCSS); // Stream en lugar de reload completo

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

            const relativePath = path.relative('src/js/modules', filePath);
            const outputPath = path.join('public/build/js/modules', relativePath);
            const mapPath = outputPath + '.map';

            try {
                if (fs.existsSync(outputPath)) {
                    fs.unlinkSync(outputPath);
                    console.log(`   ✓ Eliminado: ${outputPath}`);
                }
                if (fs.existsSync(mapPath)) {
                    fs.unlinkSync(mapPath);
                    console.log(`   ✓ Eliminado: ${mapPath}`);
                }
                reload(() => { });
            } catch (error) {
                console.error(`   ✗ Error: ${error.message}`);
            }
        });

    // Imágenes
    watch('src/img/**/*.{png,jpg}', series(cleanImg, imagenes, reload))
        .on('change', filePath => console.log(`🖼️  Imagen: ${filePath}`));

    // PHP - Recarga directa (sin procesar)
    watch([
        'views/**/*.php',
        'src/**/*.php',
        'controllers/**/*.php',
        'models/**/*.php'
    ], reload)
        .on('change', filePath => console.log(`🐘 PHP: ${filePath}`));

    done();
}

/**
 * Exportar tareas individuales
 */
export {
    // Compilación
    css,
    js,
    jsModules,
    imagenes,

    // Limpieza
    clean,
    cleanCSS,
    cleanJS,
    cleanImg,

    // Servidor
    servidor,
    reload
};

/**
 * Tareas compuestas
 */
export const imagen = series(cleanImg, imagenes);
export const build = series(clean, parallel(css, js, jsModules, imagenes));

/**
 * Tarea por defecto: compilar + servidor + watch
 */
export default series(
    clean,
    parallel(css, js, jsModules, imagenes),
    servidor,
    dev
);