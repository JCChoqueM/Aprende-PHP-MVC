import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { dados, tiradasTotales } = data.respuesta;

    const dadosHTML = dados.map((d, i) => `
        <div style="border:2px solid #333; border-radius:8px; padding:16px; margin:6px;
                    display:inline-block; width:80px; text-align:center; background:#fff;">
            <div style="font-size:1.8em;">🎲</div>
            <div style="font-size:1.4em; font-weight:bold;">${d.figura}</div>
            <small>Dado ${i + 1}</small>
        </div>
    `).join('');

    mostrarResultado(`
        <h3>🎲 Cubilete de Poker</h3>
        <div>${dadosHTML}</div>
        <br>
        <p>Tiradas totales: <b>${tiradasTotales}</b></p>
        <button onclick="sendPrompt('tirar')">🎲 Tirar cubilete</button>
    `);
}
