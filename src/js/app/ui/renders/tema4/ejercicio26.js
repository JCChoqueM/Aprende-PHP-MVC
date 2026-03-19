import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero, Dígito: digito } = data.input;

    const posiciones = data.respuesta.length > 0
        ? data.respuesta.join(', ')
        : 'no aparece';

    mostrarResultado(`El dígito ${digito} en el número ${numero} aparece en la(s) posición(es): ${posiciones}`);
}
