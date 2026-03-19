import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base: base, Altura: altura } = data.input;

    mostrarResultado(`
        <div style="background: linear-gradient(135deg, #667eea, #764ba2);
                    color: white; padding: 24px; border-radius: 12px; text-align: center;">
            <h2 style="margin:0 0 12px 0;">📐 Área del rectángulo</h2>
            <div style="background:rgba(255,255,255,0.15); border-radius:8px; padding:16px; margin:8px 0;">
                <span style="font-size:1.1em;">Base: <b>${base} m</b> × Altura: <b>${altura} m</b></span>
            </div>
            <div style="font-size:2em; font-weight:bold; margin-top:12px;">
                ${data.respuesta} m²
            </div>
        </div>
    `);
}
