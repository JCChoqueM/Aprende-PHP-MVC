import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { array, maximo } = data.respuesta;

    mostrarResultado(`Array: ${array.join(', ')} <br> Máximo → ${maximo}`);
}
