import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Radio: radio, Altura: altura } = data.input;
    const { volumen } = data.respuesta;

    mostrarResultado(`
        Radio: ${radio}m, Altura: ${altura}m <br>
        Volumen del cono: ${volumen} m³
    `);
}