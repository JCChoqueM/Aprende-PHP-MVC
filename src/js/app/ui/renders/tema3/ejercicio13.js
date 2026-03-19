import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número 1': n1, 'Número 2': n2, 'Número 3': n3 } = data.input;

    mostrarResultado(`Números: ${n1}, ${n2}, ${n3} → Ordenados: ${data.respuesta}`);
}