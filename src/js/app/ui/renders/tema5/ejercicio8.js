import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { original, ordenado } = data.respuesta;

    const filasOriginal = original.map((val, i) =>
        `<tr><td>${i}</td><td>${val}</td></tr>`
    ).join('');

    const filasOrdenado = ordenado.map((val, i) =>
        `<tr><td>${i}</td><td>${val}</td></tr>`
    ).join('');

    mostrarResultado(`
        <b>Array original:</b>
        <table border="1">
            <thead><tr><th>Índice</th><th>Valor</th></tr></thead>
            <tbody>${filasOriginal}</tbody>
        </table>
        <br>
        <b>Array ordenado (primos primero):</b>
        <table border="1">
            <thead><tr><th>Índice</th><th>Valor</th></tr></thead>
            <tbody>${filasOrdenado}</tbody>
        </table>
    `);
}
