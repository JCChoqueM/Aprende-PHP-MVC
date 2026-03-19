import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: numero, 'Base origen': base } = data.input;
    const { decimal, binario, hexadecimal, octal } = data.respuesta;

    mostrarResultado(`
        Número: ${numero} (${base}) <br>
        Decimal: ${decimal} <br>
        Binario: ${binario} <br>
        Hexadecimal: ${hexadecimal} <br>
        Octal: ${octal}
    `);
}
