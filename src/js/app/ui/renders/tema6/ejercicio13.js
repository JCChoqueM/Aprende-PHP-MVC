import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n, 'Posición inicial': ini, 'Posición final': fin } = data.input;

    mostrarResultado(`Trozo del número ${n} entre posición ${ini} y ${fin} → ${data.respuesta}`);
}
