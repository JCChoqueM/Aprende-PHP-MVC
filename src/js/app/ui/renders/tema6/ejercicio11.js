import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n, Dígito: digito } = data.input;

    mostrarResultado(`${n} con ${digito} pegado por detrás → ${data.respuesta}`);
}
