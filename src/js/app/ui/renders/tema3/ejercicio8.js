import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Nota 1': nota1, 'Nota 2': nota2, 'Nota 3': nota3 } = data.input;
    const { media, calificacion } = data.respuesta;

    mostrarResultado(`
        Notas: ${nota1}, ${nota2}, ${nota3} <br>
        Media: ${media} <br>
        Calificación: ${calificacion}
    `);
}