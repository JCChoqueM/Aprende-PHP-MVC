// js/temas/Tema2/Ejercicio1.js

export function render(data) {
    document.getElementById('phpResult').innerHTML = `
        <p>Campo 1: ${data.campo1}</p>
        <p>Campo 2: ${data.campo2}</p>
        <p>Resultado: ${data.resultado}</p>
    `;
}