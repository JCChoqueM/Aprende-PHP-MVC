// ============================================
// 02-debounce.js - Utilidad de debounce
// NIVEL: Base - No depende de nadie
// ============================================

export function debounce(callback, delay) {
    let timer = null;
    
    return function ejecutar() {
        clearTimeout(timer);
        timer = setTimeout(callback, delay);
    };
}