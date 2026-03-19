import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número 1': n1, 'Número 2': n2 } = data.input;

    mostrarResultado(`Números entre ${n1} y ${n2} de 7 en 7: ${data.respuesta.join(', ')}`);
}
