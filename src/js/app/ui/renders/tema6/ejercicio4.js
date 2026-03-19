import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Base: base, Exponente: exp } = data.input;

    mostrarResultado(`${base} ^ ${exp} = ${data.respuesta}`);
}
