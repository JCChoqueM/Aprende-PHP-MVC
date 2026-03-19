import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Fila: f, Columna: c } = data.input;
    const { matriz, esPuntoDeSilla } = data.respuesta;

    const filas = matriz.map((row, fi) =>
        `<tr>${row.map((v, ci) =>
            `<td style="padding:4px; background:${fi === parseInt(f) && ci === parseInt(c) ? '#aaddff' : 'transparent'}">${v}</td>`
        ).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Elemento en [${f}][${c}]:</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
        <br>¿Es punto de silla? → ${esPuntoDeSilla ? 'Sí' : 'No'}
    `);
}
