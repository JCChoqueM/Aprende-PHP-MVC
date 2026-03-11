// js/app/ui/renders/tema2/ejercicio1.js
import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Multiplicando, Multiplicador } = data.input;
    mostrarResultado(`${Multiplicando} x ${Multiplicador} = ${data.respuesta}`);
}