import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero } = data.input;
    const { multiplos, cantidad, suma } = data.respuesta;

    mostrarResultado(`
        Múltiplos de 3 entre 1 y ${numero}:<br> ${multiplos.join(', ')} <br>
        Cantidad: ${cantidad} <br>
        Suma: ${suma}
    `);
}
