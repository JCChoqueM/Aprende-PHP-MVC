import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Número límite': limite, Divisor: divisor } = data.input;

    mostrarResultado(`Números menores a ${limite} no divisibles entre ${divisor}:<br> ${data.respuesta.join(', ')}`);
}
