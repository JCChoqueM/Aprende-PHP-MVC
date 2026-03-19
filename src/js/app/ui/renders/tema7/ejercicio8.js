import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion } = data.respuesta;

    if (accion === 'jugar') {
        const preguntas = data.respuesta.palabras.map((p, i) =>
            `<tr><td>${p}</td><td><input type="text" id="resp${i}" placeholder="Traducción al español"></td></tr>`
        ).join('');

        mostrarResultado(`
            <h3>Traduce estas palabras al español:</h3>
            <table border="1">
                <thead><tr><th>Inglés</th><th>Tu traducción</th></tr></thead>
                <tbody>${preguntas}</tbody>
            </table>
            <br>
            <button onclick="sendPrompt('accion=comprobar&respuestas=' + [0,1,2,3,4].map(i => document.getElementById('resp'+i).value).join(','))">Comprobar</button>
            <button onclick="sendPrompt('accion=añadir')">+ Añadir palabra</button>
        `);

    } else if (accion === 'comprobar') {
        const { resultados, correctas, erroneas } = data.respuesta;

        const filas = resultados.map(r =>
            `<tr>
                <td>${r.palabra}</td>
                <td>${r.respuestaUsuario}</td>
                <td>${r.traduccionCorrecta}</td>
                <td style="color: ${r.correcta ? '#2ecc71' : '#e74c3c'}">${r.correcta ? '✓' : '✗'}</td>
            </tr>`
        ).join('');

        mostrarResultado(`
            <table border="1">
                <thead><tr><th>Inglés</th><th>Tu respuesta</th><th>Correcta</th><th></th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
            <br>Correctas: ${correctas} | Erróneas: ${erroneas}
            <br><button onclick="sendPrompt('accion=jugar')">Jugar de nuevo</button>
        `);

    } else if (accion === 'añadir') {
        mostrarResultado(`${data.respuesta.mensaje}`);
    }
}
