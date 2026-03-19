import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Fila: f, Columna: c, Dirección: dir } = data.input;
    const { matriz, diagonal } = data.respuesta;

    const filas = matriz.map((row, fi) =>
        `<tr>${row.map((v, ci) =>
            `<td style="padding:4px; background:${diagonal.includes(v) ? '#ffddaa' : 'transparent'}">${v}</td>`
        ).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Diagonal ${dir} desde [${f}][${c}]:</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
        <br>Elementos de la diagonal: ${diagonal.join(', ')}
    `);
}
