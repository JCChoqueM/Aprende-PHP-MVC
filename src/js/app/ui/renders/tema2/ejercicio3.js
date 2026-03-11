import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Bolivianos: bolivianos } = data.input;

    mostrarResultado(`${bolivianos} Bs. = ${data.respuesta} $`);
}