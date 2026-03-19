import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Día: dia, Mes: mes } = data.input;

    mostrarResultado(`Fecha: ${dia}/${mes} → Horóscopo: ${data.respuesta}`);
}