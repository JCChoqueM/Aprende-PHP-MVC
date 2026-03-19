import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const r = data.respuesta;

    const filas = r.matriz.map(fila =>
        `<tr>${fila.map(v => `<td style="padding:4px;">${v}</td>`).join('')}</tr>`
    ).join('');

    mostrarResultado(`
        <b>Matriz generada:</b>
        <table border="1" style="font-family:monospace;">${filas}</table>
        <br>
        Fila 0 → ${r.fila.join(', ')} <br>
        Columna 0 → ${r.columna.join(', ')} <br>
        Coordenadas de [0][0] → fila: ${r.coordenadas[0]}, col: ${r.coordenadas[1]} <br>
        ¿Es punto de silla [0][0]? → ${r.esPuntoDeSilla ? 'Sí' : 'No'} <br>
        Diagonal nose → ${r.diagonalNose.join(', ')} <br>
        Diagonal neso → ${r.diagonalNeso.join(', ')}
    `);
}
