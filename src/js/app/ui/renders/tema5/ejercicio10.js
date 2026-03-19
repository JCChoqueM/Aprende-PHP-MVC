import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { cartas, total } = data.respuesta;

    const filas = cartas.map(carta =>
        `<tr><td>${carta.nombre}</td><td>${carta.palo}</td><td>${carta.puntos}</td></tr>`
    ).join('');

    mostrarResultado(`
        <table border="1">
            <thead><tr><th>Carta</th><th>Palo</th><th>Puntos</th></tr></thead>
            <tbody>${filas}</tbody>
            <tfoot><tr><td colspan="2"><b>Total</b></td><td><b>${total}</b></td></tr></tfoot>
        </table>
    `);
}
