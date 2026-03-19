import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;
    const { matriz, coordenadas } = data.respuesta;

    const [fila, col] = coordenadas;
    const encontrado = fila !== -1;

    const filas = matriz.map((row, f) =>
        `<tr>${row.map((v, c) =>
            `<td style="padding:4px; background:${f === fila && c === col ? '#aaffaa' : 'transparent'}">${v}</td>`
        ).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Buscando ${n} en la matriz:</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
        <br>${encontrado
            ? `Encontrado en fila ${fila}, columna ${col}`
            : `El número ${n} no se encuentra en la matriz`}
    `);
}
