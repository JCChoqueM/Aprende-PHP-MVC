import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Horas: horas, Minutos: minutos } = data.input;

    mostrarResultado(`Hora: ${horas}:${minutos} → Segundos para medianoche: ${data.respuesta}`);
}