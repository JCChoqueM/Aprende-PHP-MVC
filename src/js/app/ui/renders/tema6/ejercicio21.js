import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { array, minimo } = data.respuesta;

    mostrarResultado(`Array: ${array.join(', ')} <br> Mínimo → ${minimo}`);
}
