import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Binario: binario } = data.input;

    mostrarResultado(`${binario} (binario) = ${data.respuesta} (decimal)`);
}
