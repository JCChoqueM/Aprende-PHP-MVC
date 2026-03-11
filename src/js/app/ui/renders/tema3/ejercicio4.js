import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Primer Número': a, 'Segundo Número': b } = data.input;
    const { suma, resta, multiplicacion, division } = data.respuesta;

    mostrarResultado(`
        ${a} + ${b} = ${suma} <br>
        ${a} - ${b} = ${resta} <br>
        ${a} x ${b} = ${multiplicacion} <br>
        ${a} ÷ ${b} = ${division}
    `);
}