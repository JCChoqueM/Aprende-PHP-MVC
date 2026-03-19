import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número 1': n1, 'Número 2': n2 } = data.input;

    mostrarResultado(`${n1} + ${n2} juntos → ${data.respuesta}`);
}
