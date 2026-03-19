import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Filas: filas } = data.input;

    const piramide = data.respuesta.map(fila => `<div>${fila}</div>`).join('');

    mostrarResultado(`<div style="font-family: Courier, monospace; text-align: center;">${piramide}</div>`);
}
