/*
 * MANEJO DE LA INTERFAZ DE USUARIO (ui.js)
 * ======================================== 
 * Este módulo gestiona:
 * 1. Colapsables (abrir/cerrar secciones)
 * 2. Formularios (envío y limpieza)
 * 3. Expandir diagramas
 * 
 * Funciones:
 * - toggleCollapsible(): Abre/cierra una sección colapsable
 * - handleSubmit(): Maneja el envío del formulario
 * - clearForm(): Limpia los campos del formulario
 * - expandDiagram(): Expande un diagrama (a implementar)
 * - initUIEvents(): Inicializa todos los event listeners
 * 
 * Se llama desde app.js al cargar la página
 * ========================================
 */

/**
 * Alterna la visibilidad de una sección colapsable
 * @param {HTMLElement} header - El elemento header que fue clickeado
 */
export function toggleCollapsible(header) {
    // Alternar clase 'active' en el header (cambia el ícono)
    header.classList.toggle('active');

    // Alternar clase 'open' en el contenido (muestra/oculta)
    header.nextElementSibling.classList.toggle('open');
}

/**
 * Maneja el envío del formulario de ejercicios
 * Calcula el resultado y lo muestra en las secciones de soluciones
 * @param {Event} event - El evento del formulario
 */
export function handleSubmit(event) {
    event.preventDefault(); // Evitar recarga de página

    // Obtener valores de los inputs
    const input1 = document.getElementById('input1').value;
    const input2 = document.getElementById('input2').value;

    // Calcular resultado (suma simple como ejemplo)
    const resultado = Number(input1) + Number(input2);

    // Mostrar resultados en PHP y JavaScript
    document.getElementById('phpResult').innerHTML =
        `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${resultado}`;

    document.getElementById('jsResult').innerHTML =
        `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${resultado}`;

    // Scroll suave hacia la sección de soluciones
    document.getElementById('solutionSection').scrollIntoView({
        behavior: 'smooth',
        block: 'nearest'
    });

    return false;
}

/**
 * Limpia todos los campos del formulario
 */
export function clearForm() {
    document.getElementById('exerciseForm').reset();
}

/**
 * Expande un diagrama a pantalla completa o modal
 * (Funcionalidad a implementar en el futuro)
 * @param {Event} event - El evento del botón
 */
export function expandDiagram(event) {
    event.stopPropagation();
    console.log('Expandir diagrama - Lógica a implementar');
    // TODO: Implementar modal o expandir diagrama
}

/**
 * Inicializa todos los event listeners de UI
 * Se llama una sola vez cuando la página carga
 */
export function initUIEvents() {
    // Agregar evento click a todos los botones de expandir diagrama
    document.querySelectorAll('.diagram-expand-btn').forEach(btn => {
        btn.addEventListener('click', expandDiagram);
    });
}
