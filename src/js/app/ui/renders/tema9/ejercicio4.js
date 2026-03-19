import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { exito, mensaje, zonas } = data.respuesta;
    const { Zona: zona, Cantidad: cantidad } = data.input;

    const zonasHTML = zonas.map(z => {
        const porcentaje = Math.round((z.disponibles / z.capacidad) * 100);
        const color = porcentaje > 50 ? '#2ecc71' : porcentaje > 20 ? '#f39c12' : '#e74c3c';

        return `
            <div style="border:1px solid #ccc; border-radius:8px; padding:12px; margin:8px; width:200px; display:inline-block; vertical-align:top;">
                <b>${z.nombre}</b><br>
                <small>Disponibles: ${z.disponibles} / ${z.capacidad}</small><br>
                <div style="background:#eee; border-radius:4px; height:10px; margin-top:6px;">
                    <div style="background:${color}; width:${porcentaje}%; height:10px; border-radius:4px;"></div>
                </div>
            </div>
        `;
    }).join('');

    const mensajeHTML = mensaje
        ? `<p style="color:${exito ? '#2ecc71' : '#e74c3c'}; font-weight:bold;">${mensaje}</p>`
        : '';

    mostrarResultado(`
        <h3>🎪 Expocoches Campanillas</h3>
        ${mensajeHTML}
        <h4>Entradas disponibles</h4>
        <div>${zonasHTML}</div>
    `);
}
