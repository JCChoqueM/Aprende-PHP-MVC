import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n, Posición: pos } = data.input;

    mostrarResultado(`El dígito en la posición ${pos} del número ${n} es: ${data.respuesta}`);
}
