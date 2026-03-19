import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const tarjetas = data.respuesta.map(a => `
        <div style="border:1px solid #ccc; border-radius:8px; padding:12px; margin:8px; display:inline-block; width:180px; vertical-align:top;">
            <b>${a.animal}</b><br>
            <small style="color:#888;">${a.clase}</small>
            <ul style="text-align:left; margin:8px 0 0 0; padding-left:16px;">
                ${a.acciones.map(acc => `<li>${acc}</li>`).join('')}
            </ul>
        </div>
    `).join('');

    mostrarResultado(`<h3>Jerarquía de animales</h3>${tarjetas}`);
}
