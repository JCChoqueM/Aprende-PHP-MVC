import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero } = data.input;

    mostrarResultado(`Suma de los 100 números siguientes a ${numero}: ${data.respuesta}`);
}
