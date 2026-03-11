// js/app/ui/renders/renderResult.js
export function mostrarResultado(mensaje) {
    document.getElementById('phpResult').innerHTML = `<p>${mensaje}</p>`;
}