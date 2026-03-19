import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { estado, cantidad, suma, media } = data.respuesta;

    if (estado === 'acumulando') {
        mostrarResultado(`
            Números introducidos: ${cantidad} <br>
            Suma acumulada: ${suma} <br>
            Introduce otro número o uno negativo para terminar.
        `);
    } else {
        mostrarResultado(`
            Total números introducidos: ${cantidad} <br>
            Media: ${media}
        `);
    }
}
