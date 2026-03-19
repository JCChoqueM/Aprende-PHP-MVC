import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { preguntas, correctas, erroneas } = data.respuesta;

    const filas = preguntas.map(p =>
        `<tr>
            <td>${p.palabra}</td>
            <td>${p.respuestaUsuario}</td>
            <td>${p.traduccionCorrecta}</td>
            <td style="color: ${p.correcta ? '#2ecc71' : '#e74c3c'}">
                ${p.correcta ? '✓' : '✗'}
            </td>
        </tr>`
    ).join('');

    mostrarResultado(`
        <table border="1">
            <thead><tr><th>Palabra</th><th>Tu respuesta</th><th>Correcta</th><th></th></tr></thead>
            <tbody>${filas}</tbody>
        </table>
        <br>
        Correctas: ${correctas} | Erróneas: ${erroneas}
    `);
}
