import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Altura: altura, Símbolo: simbolo } = data.input;

    const piramide = data.respuesta.map(fila => `<div>${fila}</div>`).join('');

    mostrarResultado(`<div style="font-family: monospace; text-align: center;">${piramide}</div>`);
}
