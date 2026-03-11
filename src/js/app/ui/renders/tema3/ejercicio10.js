import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Megabytes: mb } = data.input;
    const { kilobytes } = data.respuesta;

    mostrarResultado(`${mb} MB = ${kilobytes} KB`);
}