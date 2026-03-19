import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { original, rotada } = data.respuesta;

    const renderMatriz = (matriz) =>
        `<table border="1" style="font-family: monospace; border-collapse: collapse;">
            <tbody>
                ${matriz.map(fila =>
                    `<tr>${fila.map(val =>
                        `<td style="padding:3px; text-align:right; width:30px;">${val}</td>`
                    ).join('')}</tr>`
                ).join('')}
            </tbody>
        </table>`;

    mostrarResultado(`
        <b>Matriz original:</b><br>
        ${renderMatriz(original)}
        <br>
        <b>Matriz rotada (sentido horario):</b><br>
        ${renderMatriz(rotada)}
    `);
}
