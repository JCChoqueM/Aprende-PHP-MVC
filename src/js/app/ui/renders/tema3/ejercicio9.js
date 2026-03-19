import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { a, b, c } = data.input;

    mostrarResultado(`${a}x² + ${b}x + ${c} = 0 → ${data.respuesta}`);
}