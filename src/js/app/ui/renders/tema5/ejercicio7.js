import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { original, ordenado } = data.respuesta;

    mostrarResultado(`
        Array original: ${original.join(', ')} <br><br>
        Array ordenado (pares primero): ${ordenado.join(', ')}
    `);
}
