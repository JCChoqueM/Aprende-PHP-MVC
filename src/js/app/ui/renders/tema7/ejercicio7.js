import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { color, mensaje } = data.respuesta;

    mostrarResultado(`
        <div style="background-color: ${color}; padding: 30px; border-radius: 8px;">
            <p style="font-size:1.2em;">${mensaje}</p>
            <p>Color guardado: <b>${color}</b></p>
        </div>
    `);
}
