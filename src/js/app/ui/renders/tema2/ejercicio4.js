// js/app/ui/renders/tema2/ejercicio1.js
import { mostrarResultado } from '../../renderResult.js';
export function render(data) {
    const { primerNumero, segundoNumero } = data.input;
    const { suma, resta, multiplicacion, division } = data.respuesta;
    
    mostrarResultado(`
        ${primerNumero} + ${segundoNumero} = ${suma} <br>
        ${primerNumero} - ${segundoNumero} = ${resta} <br>
        ${primerNumero} x ${segundoNumero} = ${multiplicacion} <br>
        ${primerNumero} ÷ ${segundoNumero} = ${division}
    `);
}