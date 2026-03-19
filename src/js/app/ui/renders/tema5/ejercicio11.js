import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Palabra: palabra } = data.input;

    mostrarResultado(`"${palabra}" en inglés es: ${data.respuesta}`);
}
