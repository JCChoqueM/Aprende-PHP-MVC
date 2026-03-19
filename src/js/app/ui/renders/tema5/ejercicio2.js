import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const filas = data.respuesta.map(fila =>
        `<tr><td>${fila.valor}</td><td>${fila.etiqueta}</td></tr>`
    ).join('');

    mostrarResultado(`
        <table border="1">
            <thead><tr><th>Número</th><th></th></tr></thead>
            <tbody>${filas}</tbody>
        </table>
    `);
}
