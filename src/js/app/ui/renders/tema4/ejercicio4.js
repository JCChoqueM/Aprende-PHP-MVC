import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    mostrarResultado(`Números del 320 al 160 de 20 en 20: ${data.respuesta.join(', ')}`);
}
