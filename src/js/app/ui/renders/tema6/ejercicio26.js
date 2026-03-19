import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { original, volteado } = data.respuesta;

    mostrarResultado(`
        Array original: ${original.join(', ')} <br>
        Array volteado: ${volteado.join(', ')}
    `);
}
