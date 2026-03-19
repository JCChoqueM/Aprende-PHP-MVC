import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Columna: c } = data.input;
    const { matriz, columna } = data.respuesta;

    const filas = matriz.map(row =>
        `<tr>${row.map((v, j) =>
            `<td style="padding:4px; background:${j === parseInt(c) ? '#ffffaa' : 'transparent'}">${v}</td>`
        ).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Columna ${c} extraída: ${columna.join(', ')}</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
    `);
}
