import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Horas Trabajadas': horas } = data.input;
    const { precioHora, salario } = data.respuesta;

    mostrarResultado(`
        Horas trabajadas: ${horas} <br>
        Precio por hora: ${precioHora}€ <br>
        Salario semanal: ${salario}€
    `);
}