import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número del día': numero } = data.input;

    mostrarResultado(`El día ${numero} es: ${data.respuesta}`);
}