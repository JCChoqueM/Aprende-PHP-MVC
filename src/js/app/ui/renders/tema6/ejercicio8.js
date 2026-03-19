import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n, Dígito: digito } = data.input;

    const pos = data.respuesta === -1
        ? 'no se encuentra'
        : `está en la posición ${data.respuesta}`;

    mostrarResultado(`El dígito ${digito} en el número ${n} ${pos}`);
}
