import { mostrarResultado } from '../../renderResult.js';

// PENDIENTE: requiere input dinámico

export function render(data) {
    const { positivos, negativos } = data.respuesta;

    mostrarResultado(`
        Números positivos: ${positivos} <br>
        Números negativos: ${negativos}
    `);
}
