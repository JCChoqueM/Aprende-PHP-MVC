import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base, Altura } = data.input;
    mostrarResultado(`Área del triángulo: (${Base} x ${Altura}) / 2 = ${data.respuesta} m²`);
}