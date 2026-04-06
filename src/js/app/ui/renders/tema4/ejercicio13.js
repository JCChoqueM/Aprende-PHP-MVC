import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { estado, positivos, negativos, intento, restantes, mensaje } = data.respuesta;

    if (estado === 'fin') {
        mostrarResultado(`
            <strong>Resultado final</strong><br><br>
            Números positivos: ${positivos}<br>
            Números negativos: ${negativos}
        `);
        return;
    }

    if (estado === 'reseteado') {
        mostrarResultado(`<p>${mensaje}</p>`);
        return;
    }

    // continuar
    mostrarResultado(`
        <strong>Procesando...</strong><br><br>
        Positivos: ${positivos}<br>
        Negativos: ${negativos}<br><br>
        Intentos: ${intento} de 10<br>
        Restantes: ${restantes}
    `);
}