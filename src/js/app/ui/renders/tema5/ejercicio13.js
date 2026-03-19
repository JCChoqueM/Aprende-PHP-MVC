import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { matriz, minimo, filMin, colMin } = data.respuesta;

    const filas = matriz.map((fila, f) =>
        `<tr>${fila.map((val, c) => {
            let color = 'black';
            if (f === filMin && c === colMin) color = 'blue';
            else if (f === filMin || c === colMin) color = 'green';
            return `<td style="color:${color}; padding:4px;">${val}</td>`;
        }).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <table border="1" style="font-family: monospace;">
            <tbody>${filas}</tbody>
        </table>
        <br>Mínimo: <span style="color:blue;">${minimo}</span> (fila ${filMin}, columna ${colMin})
    `);
}
