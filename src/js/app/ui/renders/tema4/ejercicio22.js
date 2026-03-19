import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    mostrarResultado(`Números primos entre 2 y 100: ${data.respuesta.join(', ')}`);
}
