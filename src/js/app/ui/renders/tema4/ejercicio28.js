import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero } = data.input;

    mostrarResultado(`${numero}! = ${data.respuesta}`);
}
