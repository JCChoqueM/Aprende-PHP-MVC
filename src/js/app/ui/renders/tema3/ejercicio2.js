import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Hora: hora } = data.input;

    mostrarResultado(`Son las ${hora}h → ${data.respuesta}`);
}