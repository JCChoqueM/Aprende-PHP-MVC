// js/temas/Tema2/Ejercicio1.js

export function render(data) {
    document.getElementById('phpResult').innerHTML =
        `<p>${data.input.Multiplicando} x ${data.input.Multiplicador} = ${data.respuesta}</p>`;
}