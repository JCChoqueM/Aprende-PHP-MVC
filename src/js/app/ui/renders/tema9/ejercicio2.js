import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { mensaje, kmBicicleta, kmCoche, kmTotales, vehiculosCreados } = data.respuesta;

    mostrarResultado(`
        <div style="background:#f9f9f9; padding:12px; border-radius:8px; margin-bottom:12px;">
            <b>Acción:</b> ${mensaje}
        </div>

        <h3>Estadísticas</h3>
        <table border="1">
            <tbody>
                <tr><td>🚲 Km bicicleta</td><td><b>${kmBicicleta} km</b></td></tr>
                <tr><td>🚗 Km coche</td><td><b>${kmCoche} km</b></td></tr>
                <tr><td>📊 Km totales</td><td><b>${kmTotales} km</b></td></tr>
                <tr><td>🚘 Vehículos creados</td><td><b>${vehiculosCreados}</b></td></tr>
            </tbody>
        </table>

        <br>
        <button onclick="sendPrompt('accion=andarBici')">🚲 Andar en bici</button>
        <button onclick="sendPrompt('accion=caballito')">🤸 Caballito</button>
        <button onclick="sendPrompt('accion=andarCoche')">🚗 Andar en coche</button>
        <button onclick="sendPrompt('accion=quemarRueda')">🔥 Quemar rueda</button>
        <button onclick="sendPrompt('accion=stats')">📊 Ver stats</button>
    `);
}
