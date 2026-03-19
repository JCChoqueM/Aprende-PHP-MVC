import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;

    mostrarResultado(`El número ${n} tiene ${data.respuesta} dígitos`);
}
