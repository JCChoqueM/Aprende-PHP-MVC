import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Posiciones: pos } = data.input;
    const { original, rotado } = data.respuesta;

    mostrarResultado(`
        Array original: ${original.join(', ')} <br>
        Rotado ${pos} posición(es) a la derecha: ${rotado.join(', ')}
    `);
}
