import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base: base, Altura: altura } = data.input;

    mostrarResultado(`Área del rectángulo: ${base} x ${altura} = ${data.respuesta} m²`);
}