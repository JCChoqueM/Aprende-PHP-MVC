
// ============================================
// src/js/utils.js
// Utilidades compartidas
// ============================================

export function obtenerParametrosRuta() {
    const patron = /tema(\d+)\/ejercicio(\d+)/;
    const coincidencia = window.location.pathname.match(patron);
    
    return coincidencia ? {
        tema: Number(coincidencia[1]),
        ejercicio: Number(coincidencia[2])
    } : null;
}

export function debounce(callback, delay) {
    let timer = null;
    
    return function ejecutar() {
        clearTimeout(timer);
        timer = setTimeout(callback, delay);
    };
}