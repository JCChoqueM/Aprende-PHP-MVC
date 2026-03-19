import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const barras = Object.entries(data.respuesta).map(([mes, temp]) => {
        const ancho = Math.abs(temp) * 5;
        const color = temp >= 0 ? '#e74c3c' : '#3498db';
        return `
            <tr>
                <td style="width:100px; text-align:right; padding-right:8px;">${mes}</td>
                <td>
                    <div style="background:${color}; width:${ancho}px; height:20px; display:inline-block;"></div>
                    <span style="margin-left:5px;">${temp}°C</span>
                </td>
            </tr>
        `;
    }).join('');

    mostrarResultado(`
        <table>
            <tbody>${barras}</tbody>
        </table>
    `);
}
