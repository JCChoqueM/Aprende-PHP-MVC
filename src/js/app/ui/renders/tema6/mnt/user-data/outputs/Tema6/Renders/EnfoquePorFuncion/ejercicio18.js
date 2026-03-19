import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Decimal: decimal } = data.input;

    mostrarResultado(`${decimal} (decimal) = ${data.respuesta} (binario)`);
}
