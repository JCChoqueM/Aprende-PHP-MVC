import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    mostrarResultado(`Múltiplos de 5 del 0 al 100: ${data.respuesta.join(', ')}`);
}
