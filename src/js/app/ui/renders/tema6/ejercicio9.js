import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { Número: n, Cantidad: cantidad } = data.input;

    mostrarResultado(`${n} quitando ${cantidad} dígito(s) por detrás → ${data.respuesta}`);
}
