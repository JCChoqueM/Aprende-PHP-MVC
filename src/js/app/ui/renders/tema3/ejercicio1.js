import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Día de la semana': dia } = data.input;

    mostrarResultado(`El día ${dia} toca: ${data.respuesta}`);
}