import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Filas: f, Columnas: c, Mínimo: min, Máximo: max } = data.input;

    const filas = data.respuesta.map(fila =>
        `<tr>${fila.map(v => `<td style="padding:4px;">${v}</td>`).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Matriz ${f}x${c} generada (${min}-${max}):</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
    `);
}
