import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    mostrarResultado(`Números capicúa entre 1 y 99999: ${data.respuesta.join(', ')}`);
}
