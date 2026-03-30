import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero } = data.input;

    const filas = data.respuesta.map(fila =>
        `<tr><td>${fila.operacion}</td><td>${fila.resultado}</td></tr>`
    ).join('');

    mostrarResultado(`
        <h3>Tablas de multiplicar del número ${numero}</h3>
        <table border="1">
            <thead><tr><th>Operación</th><th>Resultado</th></tr></thead>
            <tbody>${filas}</tbody>
        </table>
    `);
}
