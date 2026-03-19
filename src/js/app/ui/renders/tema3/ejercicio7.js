import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Nota 1': nota1, 'Nota 2': nota2, 'Nota 3': nota3 } = data.input;

    mostrarResultado(`Notas: ${nota1}, ${nota2}, ${nota3} → Media: ${data.respuesta}`);
}