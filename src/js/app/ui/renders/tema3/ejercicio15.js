import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Kilobytes: kb } = data.input;
    const { megabytes } = data.respuesta;

    mostrarResultado(`${kb} KB = ${megabytes} MB`);
}