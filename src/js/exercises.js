/*
 * GESTIÓN DE CAPÍTULOS Y EJERCICIOS (exercises.js)
 * ======================================== 
 * Este módulo maneja:
 * 1. Generación de la estructura HTML del sidebar
 * 2. Control de capítulos expandibles (acordeón)
 * 3. Carga dinámmica de ejercicios
 * 4. Manejo de navegación y selección
 * 
 * Funciones principales:
 * - generateChapters(): Crea el HTML del sidebar desde data.js
 * - toggleChapter(): Abre/cierra un capítulo (acordeón)
 * - loadExercise(): Carga un ejercicio específico en el contenido
 * 
 * Se ejecuta al cargar la app desde app.js
 * ========================================
 */

// Importar los datos de capítulos
import { chapters } from './data.js';
// Importar funciones del sidebar para cerrar en móvil
import { closeSidebar, restoreIndexCollapseState } from './sidebar.js';

/**
 * Genera la estructura HTML completa del sidebar con capítulos y ejercicios
 * Itera sobre el array chapters y crea elementos dinámicamente
 */
export function generateChapters() {
    const accordion = document.getElementById('chapterAccordion');

    // Por cada capítulo en el array
    chapters.forEach(chapter => {
        // Crear elemento <li> que contendrá el capítulo
        const li = document.createElement('li');

        // Crear header (título del capítulo)
        const header = document.createElement('div');
        header.className = 'chapter-header';
        header.id = `chapter-${chapter.id}`;
        header.innerHTML = `<span>📖 Cap ${chapter.id}: ${chapter.name}</span><span class="chapter-icon">▼</span>`;

        // Evento: al hacer click, abre/cierra el capítulo
        header.onclick = (e) => {
            e.stopPropagation();
            toggleChapter(chapter.id, header);
        };

        // Crear contenedor de ejercicios (inicialmente oculto)
        const exercisesList = document.createElement('div');
        exercisesList.className = 'exercises-list';
        exercisesList.id = `exercises-${chapter.id}`;

        // Por cada ejercicio en el capítulo
        chapter.exercises.forEach((exercise, index) => {
            const exerciseDiv = document.createElement('div');
            exerciseDiv.className = 'exercise-item';
            exerciseDiv.id = `exercise-${chapter.id}-${index + 1}`;
            exerciseDiv.textContent = exercise;

            // Evento: al hacer click, carga el ejercicio
            exerciseDiv.onclick = (e) => {
                e.stopPropagation();
                loadExercise(chapter.id, index + 1, exerciseDiv);
            };

            exercisesList.appendChild(exerciseDiv);
        });

        // Agregar header y lista de ejercicios al capítulo
        li.appendChild(header);
        li.appendChild(exercisesList);
        accordion.appendChild(li);
    });

    // Restaurar el estado de colapso del índice desde localStorage
    restoreIndexCollapseState();
}

/**
 * Alterna (abre/cierra) un capítulo del acordeón
 * @param {number} chapterId - ID del capítulo a toggle
 * @param {HTMLElement} headerElement - El elemento header que fue clickeado
 */
export function toggleChapter(chapterId, headerElement) {
    // Obtener la lista de ejercicios del capítulo
    const exercisesList = document.getElementById(`exercises-${chapterId}`);

    // Alternar clase 'active' en el header
    headerElement.classList.toggle('active');

    // Alternar clase 'open' en la lista de ejercicios (muestra/oculta)
    exercisesList.classList.toggle('open');
}

/**
 * Carga un ejercicio específico en el área de contenido principal
 * Actualiza el título, badgers, descripción, etc.
 * @param {number} chapterId - ID del capítulo
 * @param {number} exerciseNum - Número del ejercicio dentro del capítulo
 * @param {HTMLElement} exerciseElement - El elemento del ejercicio clickeado
 */
export function loadExercise(chapterId, exerciseNum, exerciseElement) {
    // En móvil, cerrar sidebar después de seleccionar un ejercicio
    if (window.innerWidth <= 968) closeSidebar();

    // Remover clase 'active' de todos los ejercicios
    document.querySelectorAll('.exercise-item').forEach(item => item.classList.remove('active'));

    // Agregar clase 'active' al ejercicio seleccionado
    exerciseElement.classList.add('active');

    // Remover clase 'active' de todos los capítulos
    document.querySelectorAll('.chapter-header').forEach(header => header.classList.remove('active'));

    // Agregar clase 'active' al capítulo del ejercicio seleccionado
    const activeChapter = document.getElementById(`chapter-${chapterId}`);
    if (activeChapter) {
        activeChapter.classList.add('active');
    }

    // Actualizar el título del ejercicio
    document.getElementById('exerciseTitle').textContent = `Capítulo ${chapterId} - Ejercicio ${exerciseNum}`;

    // Actualizar el badge del capítulo
    document.getElementById('chapterBadge').textContent = `Capítulo ${chapterId}`;

    // Actualizar la descripción del ejercicio
    document.getElementById('exerciseDescription').innerHTML = `
        <p><strong>📝 Descripción del ejercicio ${exerciseNum}:</strong></p>
        <p>Este es un ejemplo de descripción del ejercicio ${exerciseNum} del capítulo ${chapterId}.</p>
    `;
}
