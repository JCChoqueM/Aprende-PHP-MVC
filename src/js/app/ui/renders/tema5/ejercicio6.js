import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const numeros = data.respuesta.map(item =>
        `<span style="color: ${item.esPar ? '#2ecc71' : '#e74c3c'}; font-size:1.2em; margin:4px;">
            ${item.valor}
        </span>`
    ).join(' ');

    mostrarResultado(`
        <div>
            <span style="color:#2ecc71;">■ Pares</span> &nbsp;
            <span style="color:#e74c3c;">■ Impares</span>
        </div><br>
        ${numeros}
    `);
}
