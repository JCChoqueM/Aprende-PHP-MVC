import { mostrarResultado } from '../../renderResult.js';

const btnResetear = (color, texto) => `
    <button
        onclick="
            document.getElementById('campoAccion').value = 'resetear';
            document.getElementById('btnResolver').click();
        "
        style="margin-top:12px; padding:10px 20px; border:none;
               border-radius:8px; background:#fff; color:${color};
               font-weight:bold; cursor:pointer;">
        🔄 ${texto}
    </button>
`;

export function render(data) {
    // Añade campo oculto al formulario si no existe
    if (!document.getElementById('campoAccion')) {
        const input = document.createElement('input');
        input.type  = 'hidden';
        input.id    = 'campoAccion';
        input.name  = 'accion';
        input.value = '';
        document.querySelector('form').appendChild(input);
    } else {
        // Resetea el valor para la siguiente petición normal
        document.getElementById('campoAccion').value = '';
    }

    const { abierta, bloqueada, intentos, restantes, mensaje } = data.respuesta;

    if (bloqueada) {
        mostrarResultado(`
            <div style="background:#e74c3c; color:#fff; padding:24px; border-radius:12px; text-align:center;">
                <div style="font-size:3em;">🔒</div>
                <h2 style="margin:8px 0;">Caja bloqueada</h2>
                <p>${mensaje}</p>
                ${btnResetear('#e74c3c', 'Resetear intentos')}
            </div>
        `);
        return;
    }

    if (abierta) {
        mostrarResultado(`
            <div style="background:#2ecc71; color:#fff; padding:24px; border-radius:12px; text-align:center;">
                <div style="font-size:3em;">🔓</div>
                <h2 style="margin:8px 0;">¡Abierta!</h2>
                <p>${mensaje}</p>
                ${btnResetear('#2ecc71', 'Jugar de nuevo')}
            </div>
        `);
        return;
    }

    const puntosRestantes = Array.from({ length: 4 }, (_, i) =>
        `<span style="font-size:1.5em;">${i < intentos ? '🔴' : '🟢'}</span>`
    ).join(' ');

    mostrarResultado(`
        <div style="background:#e67e22; color:#fff; padding:24px; border-radius:12px; text-align:center;">
            <div style="font-size:3em;">🔒</div>
            <h2 style="margin:8px 0;">Combinación incorrecta</h2>
            <p>${mensaje}</p>
            <div style="margin-top:12px;">${puntosRestantes}</div>
            <small>🔴 intentos fallidos · 🟢 intentos restantes</small>
        </div>
    `);
}