import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Combinación: combinacion } = data.input;
    const { mensaje } = data.respuesta;

    mostrarResultado(`Combinación introducida: ${combinacion} <br> ${mensaje}`);
}
