import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Cantidad: cantidad, 'Moneda origen': moneda } = data.input;
    const { origen, destino, resultado } = data.respuesta;

    const simboloOrigen  = moneda === 'euros' ? '€' : '₧';
    const simboloDestino = moneda === 'euros' ? '₧' : '€';

    mostrarResultado(`
        <div style="background:linear-gradient(135deg,#f7971e,#ffd200);
                    padding:24px; border-radius:12px; text-align:center;">
            <h2 style="margin:0 0 16px 0;">💱 Conversor €  ↔  ₧</h2>
            <div style="font-size:1.4em;">
                <b>${cantidad} ${simboloOrigen}</b>
                <span style="margin:0 12px;">→</span>
                <b>${resultado} ${simboloDestino}</b>
            </div>
            <small style="display:block; margin-top:12px; color:#555;">
                1 € = 166.386 ₧
            </small>
        </div>
    `);
}
