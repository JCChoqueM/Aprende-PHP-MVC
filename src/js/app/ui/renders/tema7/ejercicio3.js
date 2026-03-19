import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { estado, cantidad, suma, total, media } = data.respuesta;

    if (estado === 'acumulando') {
        mostrarResultado(`
            Números introducidos: ${cantidad} <br>
            Suma acumulada: ${suma} <br>
            Introduce otro número positivo.
        `);
    } else {
        mostrarResultado(`
            ¡Suma superada! <br>
            Total acumulado: ${total} <br>
            Números introducidos: ${cantidad} <br>
            Media: ${media}
        `);
    }
}
