import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Fila: f } = data.input;
    const { matriz, fila } = data.respuesta;

    const filas = matriz.map((row, i) =>
        `<tr style="background:${i === parseInt(f) ? '#ffffaa' : 'transparent'}">
            ${row.map(v => `<td style="padding:4px;">${v}</td>`).join('')}
        </tr>`
    ).join('');

    mostrarResultado(`
        <b>Fila ${f} extraída: ${fila.join(', ')}</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
    `);
}
