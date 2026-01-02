/*
 * GESTIÓN DEL SIDEBAR Y NAVEGACIÓN (sidebar.js)
 * ======================================== 
 * Módulo que controla:
 * 1. Abrir/cerrar sidebar en móvil
 * 2. Colapsar/expandir el índice (con almacenamiento)
 * 3. Navegar con teclado (Escape para cerrar)
 * 
 * Funciones:
 * - toggleSidebar(): Abre/cierra el sidebar (móvil)
 * - closeSidebar(): Cierra el sidebar
 * - toggleIndexCollapse(): Alterna colapso del índice
 * - restoreIndexCollapseState(): Restaura estado del colapso
 * - initSidebarEvents(): Inicializa event listeners
 * 
 * Se importa desde app.js
 * ========================================
 */

/**
 * Alterna la visibilidad del sidebar (móvil)
 * Muestra/oculta el sidebar y el overlay oscuro
 */
export function toggleSidebar() {
    // Alternar clase 'active' que muestra/oculta el sidebar
    document.getElementById('sidebar').classList.toggle('active');

    // Alternar clase 'active' del overlay (fondo oscuro)
    document.getElementById('sidebarOverlay').classList.toggle('active');
}

/**
 * Cierra el sidebar completamente
 * Se llama cuando se selecciona un ejercicio en móvil
 */
export function closeSidebar() {
    // Remover clase 'active' para ocultar el sidebar
    document.getElementById('sidebar').classList.remove('active');

    // Remover clase 'active' del overlay
    document.getElementById('sidebarOverlay').classList.remove('active');
}

/**
 * Alterna el estado de colapso del índice
 * Guarda el estado en localStorage para persistencia
 */
export function toggleIndexCollapse() {
    const sidebar = document.getElementById('sidebar');

    // Alternar clase 'collapsed'
    sidebar.classList.toggle('collapsed');

    // Verificar si está colapsado
    const isCollapsed = sidebar.classList.contains('collapsed');

    // Guardar estado en localStorage para recordarlo en próximas visitas
    localStorage.setItem('indexCollapsed', isCollapsed);
}

/**
 * Restaura el estado anterior del índice colapsado
 * Se llama cuando se generan los capítulos (desde generateChapters)
 */
export function restoreIndexCollapseState() {
    // Obtener estado guardado en localStorage
    const isCollapsed = localStorage.getItem('indexCollapsed') === 'true';
    const sidebar = document.getElementById('sidebar');

    // Si estaba colapsado, aplicar clase
    if (isCollapsed) {
        sidebar.classList.add('collapsed');
    }
}

/**
 * Inicializa los event listeners del sidebar
 * Principalmente para navegar con teclado (Escape)
 * Se llama desde app.js al cargar la página
 */
export function initSidebarEvents() {
    // Escuchar eventos de teclado
    document.addEventListener('keydown', (e) => {
        // Si se presiona Escape
        if (e.key === 'Escape') {
            const sidebar = document.getElementById('sidebar');

            // Si el sidebar está abierto, cerrarlo
            if (sidebar.classList.contains('active')) {
                closeSidebar();
            }
        }
    });
}
