import { mostrarResultado } from '../../renderResult.js';

const emojis = { Oros: '🟡', Copas: '🏆', Espadas: '⚔️', Bastos: '🪵' };

export function render(data) {
    const { 'Número de cartas': n } = data.input;

    const cartasHTML = data.respuesta.map(c => `
        <div style="border:2px solid #c8a96e; border-radius:8px; padding:10px; margin:4px;
                    display:inline-block; width:80px; text-align:center; background:#fffbe6;">
            <div style="font-size:1.5em;">${emojis[c.palo] || '🃏'}</div>
            <div style="font-weight:bold;">${c.figura}</div>
            <small style="color:#888;">${c.palo}</small>
        </div>
    `).join('');

    mostrarResultado(`
        <h3>🃏 Mazo de ${n} cartas</h3>
        <div>${cartasHTML}</div>
    `);
}
