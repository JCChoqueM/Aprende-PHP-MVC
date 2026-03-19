import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const filas = data.respuesta.map(fila =>
        `<tr><td>${fila.numero}</td><td>${fila.cuadrado}</td><td>${fila.cubo}</td></tr>`
    ).join('');

    mostrarResultado(`
        <table border="1">
            <thead><tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr></thead>
            <tbody>${filas}</tbody>
        </table>
    `);
}
