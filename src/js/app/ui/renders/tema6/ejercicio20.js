import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Tamaño: n, Mínimo: min, Máximo: max } = data.input;

    mostrarResultado(`Array de ${n} números entre ${min} y ${max}: ${data.respuesta.join(', ')}`);
}
