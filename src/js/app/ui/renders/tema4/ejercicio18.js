import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número 1': n1, 'Número 2': n2 } = data.input;
    const { estado, mensaje } = data.respuesta;
    if (estado === 'error') {
        mostrarResultado(`
            <strong>${mensaje}</strong><br><br>
          
        `);
        return;
    }
    mostrarResultado(`Números entre ${n1} y ${n2} de 7 en 7:<br> ${data.respuesta.join(', ')}`);
}
