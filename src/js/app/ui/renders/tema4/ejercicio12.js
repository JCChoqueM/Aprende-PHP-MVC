import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Términos: terminos } = data.input;

    mostrarResultado(`Los ${terminos} primeros términos de Fibonacci: ${data.respuesta.join(', ')}`);
}
