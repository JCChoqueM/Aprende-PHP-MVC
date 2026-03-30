import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { estado, numeros, cantidad, suma, media, mensaje } = data.respuesta;

    if (estado === 'fin') {
        mostrarResultado(`
            <h3>✅ Resultado final</h3>
            <p>Números introducidos: <b>${numeros.join(', ')}</b></p>
            <p>Cantidad: <b>${cantidad}</b></p>
            <p>Media: <b>${media}</b></p>
        `);
        return;
    }

    if (estado === 'reseteado') {
        mostrarResultado(`<p>${mensaje}</p>`);
        return;
    }

    mostrarResultado(`
        <h3>📊 Acumulando...</h3>
        <p>Números: <b>${numeros.join(', ')}</b></p>
        <p>Cantidad: <b>${cantidad}</b></p>
        <p>Suma actual: <b>${suma}</b></p>
        <p style="color:#888;">${mensaje}</p>
    `);
}