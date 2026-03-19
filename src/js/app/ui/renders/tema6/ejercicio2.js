import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;

    mostrarResultado(`El número ${n} ${data.respuesta ? 'es primo' : 'no es primo'}`);
}
