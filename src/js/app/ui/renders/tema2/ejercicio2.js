import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Dolar $': dolar } = data.input;

    mostrarResultado(`${dolar} $ = ${data.respuesta} Bs.`);
}