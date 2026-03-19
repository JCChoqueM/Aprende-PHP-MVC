import { mostrarResultado } from '../../renderResult.js';

// PENDIENTE: requiere input dinámico

export function render(data) {
    const { cantidad, mediaImpares, mayorPar } = data.respuesta;

    mostrarResultado(`
        Números introducidos: ${cantidad} <br>
        Media de los impares: ${mediaImpares} <br>
        Mayor de los pares: ${mayorPar}
    `);
}
