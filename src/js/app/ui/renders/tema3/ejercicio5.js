import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { a, b } = data.input;

    mostrarResultado(`${a}x + ${b} = 0 → x = ${data.respuesta}`);
}