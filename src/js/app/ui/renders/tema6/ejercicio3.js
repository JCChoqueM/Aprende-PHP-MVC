import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;

    mostrarResultado(`El siguiente primo mayor a ${n} es: ${data.respuesta}`);
}
