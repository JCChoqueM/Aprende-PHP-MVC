import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { array, media } = data.respuesta;

    mostrarResultado(`Array: ${array.join(', ')} <br> Media → ${media}`);
}
