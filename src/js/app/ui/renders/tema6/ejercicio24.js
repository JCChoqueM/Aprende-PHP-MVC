import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n } = data.input;
    const { array, estaEn } = data.respuesta;

    mostrarResultado(`
        Array: ${array.join(', ')} <br>
        ¿Está el ${n} en el array? → ${estaEn ? 'Sí' : 'No'}
    `);
}
