// js/app/ui/renders/tema2/ejercicio2.js
import { mostrarResultado } from '../renderResult.js';

export function render(data) {
    mostrarResultado(`${data.input.Boliviano} Bs. = ${data.respuesta}`);
}