import { mostrarResultado } from '../../renderResult.js';

// PENDIENTE: requiere input dinámico

export function render(data) {
    const { cantidad, media } = data.respuesta;

    mostrarResultado(`
        Números introducidos: ${cantidad} <br>
        Media: ${media}
    `);
}
