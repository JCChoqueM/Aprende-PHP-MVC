// ejercicio15.js
import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    mostrarResultado(`Números primos entre 1 y 1000: ${data.respuesta.join(', ')}`);
}
