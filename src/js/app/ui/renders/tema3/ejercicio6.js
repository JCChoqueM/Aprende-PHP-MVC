import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Altura (metros)': altura } = data.input;

    mostrarResultado(`Altura: ${altura}m → Tiempo de caída: ${data.respuesta} s`);
}