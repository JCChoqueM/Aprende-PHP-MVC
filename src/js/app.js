/*
 * PUNTO DE ENTRADA PRINCIPAL (app.js)
 * ======================================== 
 * Este es el archivo principal que orquesta todos los módulos.
 * 
 * Funciones:
 * 1. Importar todos los módulos necesarios
 * 2. Esperar a que el DOM esté listo (DOMContentLoaded)
 * 3. Inicializar todos los componentes en orden:
 *    - Generar estructura de capítulos y ejercicios
 *    - Configurar eventos del sidebar
 *    - Configurar eventos de UI (formularios, colapsables)
 *    - Activar scroll suave
 * 
 * Se ejecuta una sola vez cuando la página carga completamente
 * ========================================
 */

// Importar funciones de otros módulos
import { generateChapters } from './exercises.js';
import { initSidebarEvents } from './sidebar.js';
import { initUIEvents } from './ui.js';
import { initSmoothScroll } from './utils.js';

// Esperar a que el DOM esté completamente cargado antes de ejecutar
document.addEventListener('DOMContentLoaded', () => {
    // 1. Generar la estructura HTML de capítulos desde el array de data.js
    generateChapters();

    // 2. Inicializar los event listeners del sidebar (abrir/cerrar, etc)
    initSidebarEvents();

    // 3. Inicializar los event listeners de UI (formularios, colapsables)
    initUIEvents();

    // 4. Activar el scroll suave en toda la página
    initSmoothScroll();

    // Log de confirmación
    console.log('✅ Aplicación inicializada correctamente');
});
