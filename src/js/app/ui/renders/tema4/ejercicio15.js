import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base: base, Exponente: exponente } = data.input;

    const filas = data.respuesta.map(fila =>
        `<tr><td>${base}<sup>${fila.exponente}</sup></td><td>${fila.resultado}</td></tr>`
    ).join('');

    mostrarResultado(`
        <table border="1">
            <thead><tr><th>Potencia</th><th>Resultado</th></tr></thead>
            <tbody>${filas}</tbody>
        </table>
    `);
}
