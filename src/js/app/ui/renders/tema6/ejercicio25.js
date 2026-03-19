import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;
    const { array, posicion } = data.respuesta;

    const msg = posicion === -1
        ? `El ${n} no se encuentra en el array`
        : `El ${n} está en la posición ${posicion}`;

    mostrarResultado(`Array: ${array.join(', ')} <br> ${msg}`);
}
