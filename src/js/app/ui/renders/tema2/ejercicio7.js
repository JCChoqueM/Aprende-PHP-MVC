// js/app/ui/renders/tema2/ejercicio6.js
import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Compra, baseImponible } = data.input;
    const { iva, total } = data.respuesta;

    mostrarResultado(`
        Compra: ${Compra} <br>
        IVA (${baseImponible}%): ${iva} <br>
        Total: ${total}
    `);
}