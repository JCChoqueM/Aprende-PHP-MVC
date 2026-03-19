import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { estado, cantidad, mediaImpares, mayorPar } = data.respuesta;

    if (estado === 'acumulando') {
        mostrarResultado(`
            Números introducidos: ${cantidad} <br>
            Introduce otro número o uno negativo para terminar.
        `);
    } else {
        mostrarResultado(`
            Total números introducidos: ${cantidad} <br>
            Media de los impares: ${mediaImpares} <br>
            Mayor de los pares: ${mayorPar}
        `);
    }
}
