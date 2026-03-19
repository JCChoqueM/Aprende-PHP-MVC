import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { acceso, mensaje } = data.respuesta;

    const color = acceso ? '#2ecc71' : '#e74c3c';

    mostrarResultado(`
        <span style="color: ${color}; font-size: 1.2em;">
            ${mensaje}
        </span>
    `);
}
