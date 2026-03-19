import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { original, rotado } = data.respuesta;

    mostrarResultado(`
        Array original: ${original.join(', ')} <br>
        Array rotado: ${rotado.join(', ')}
    `);
}
