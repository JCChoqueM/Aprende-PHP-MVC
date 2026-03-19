import { mostrarResultado } from '../../renderResult.js';

// PENDIENTE: requiere input dinámico

export function render(data) {
    const { total, cantidad, media } = data.respuesta;

    mostrarResultado(`
        Total acumulado: ${total} <br>
        Números introducidos: ${cantidad} <br>
        Media: ${media}
    `);
}
