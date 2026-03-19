import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero } = data.input;

    mostrarResultado(`La primera cifra de ${numero} es: ${data.respuesta}`);
}