/*
 * FUNCIONES UTILITARIAS (utils.js)
 * ======================================== 
 * Módulo con funciones de utilidad compartidas:
 * 1. copyCode(): Copia código al portapapeles
 * 2. showCopyFeedback(): Muestra feedback visual tras copiar
 * 3. fallbackCopyCode(): Fallback para navegadores antiguos
 * 4. initSmoothScroll(): Activa scroll suave en la página
 * 
 * Se importan desde app.js y otros módulos
 * ========================================
 */

/**
 * Copia el contenido de un elemento al portapapeles
 * Usa la API moderna o fallback para navegadores antiguos
 * @param {string} elementId - ID del elemento a copiar
 * @param {Event} event - Evento del botón (para feedback)
 */
export function copyCode(elementId, event) {
    // Obtener el texto del elemento
    const code = document.getElementById(elementId).textContent;

    // Obtener el botón que fue clickeado
    const btn = event && event.target ? event.target : document.querySelector('.copy-btn');

    // Intentar copiar con la API moderna (Clipboard API)
    navigator.clipboard.writeText(code).then(() => {
        // Si funciona, mostrar feedback
        showCopyFeedback(btn);
    }).catch(err => {
        // Si falla, usar método fallback
        fallbackCopyCode(code, btn);
    });
}

/**
 * Muestra feedback visual cuando se copia código
 * Cambia el texto del botón y color por 2 segundos
 * @param {HTMLElement} btn - El botón que fue clickeado
 */
function showCopyFeedback(btn) {
    // Guardar el HTML original del botón
    const originalText = btn.innerHTML;

    // Cambiar a "Copiado" con checkmark verde
    btn.innerHTML = '✅ Copiado';
    btn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
    btn.style.boxShadow = '0 4px 12px rgba(16, 185, 129, 0.5)';

    // Restaurar después de 2 segundos
    setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.style.boxShadow = '';
    }, 2000);
}

/**
 * Fallback para copiar código en navegadores sin Clipboard API
 * Usa un textarea temporal y document.execCommand
 * @param {string} code - El código a copiar
 * @param {HTMLElement} btn - El botón para mostrar feedback
 */
function fallbackCopyCode(code, btn) {
    // Crear textarea temporal
    const textarea = document.createElement('textarea');
    textarea.value = code;
    document.body.appendChild(textarea);

    // Seleccionar y copiar
    textarea.select();
    document.execCommand('copy');

    // Remover textarea
    document.body.removeChild(textarea);

    // Mostrar feedback
    const originalText = btn.innerHTML;
    btn.innerHTML = '✅ Copiado';
    setTimeout(() => {
        btn.innerHTML = originalText;
    }, 2000);
}

/**
 * Activa el comportamiento de scroll suave en toda la página
 * Mejora la experiencia al hacer scroll o scrollIntoView()
 */
export function initSmoothScroll() {
    document.documentElement.style.scrollBehavior = 'smooth';
}
