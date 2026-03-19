import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Columna: columna, Fila: fila } = data.input;

    const columnas = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

    const cabecera = `<tr><th></th>${columnas.map(c => `<th>${c}</th>`).join('')}</tr>`;

    const filas = data.respuesta.map((fila, f) =>
        `<tr>
            <th>${8 - f}</th>
            ${fila.map(casilla => {
                const bg = casilla.estado === 'alfil'
                    ? '#e74c3c'
                    : casilla.estado === 'movimiento'
                        ? '#2ecc71'
                        : ((f + fila.indexOf(casilla)) % 2 === 0 ? '#f0d9b5' : '#b58863');
                return `<td style="background:${bg}; width:40px; height:40px; text-align:center;">
                    ${casilla.estado === 'alfil' ? '♝' : ''}
                </td>`;
            }).join('')}
        </tr>`
    ).join('');

    mostrarResultado(`
        <table border="1" style="border-collapse: collapse;">
            <thead>${cabecera}</thead>
            <tbody>${filas}</tbody>
        </table>
        <br>Alfil en: ${columna}${fila}
    `);
}
