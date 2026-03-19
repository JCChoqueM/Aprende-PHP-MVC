import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Valor a reemplazar': buscar, 'Nuevo valor': nuevo } = data.input;

    const numeros = data.respuesta.map(item =>
        item.cambiado
            ? `<span style="color: red; font-weight: bold;">${item.valor}</span>`
            : `${item.valor}`
    ).join(' ');

    mostrarResultado(`
        Reemplazando ${buscar} por ${nuevo}: <br><br>
        ${numeros}
    `);
}
