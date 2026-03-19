import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base: base, Exponente: exponente } = data.input;

    mostrarResultado(`${base} ^ ${exponente} = ${data.respuesta}`);
}
