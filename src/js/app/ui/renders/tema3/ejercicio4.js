import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { 'Horas Trabajadas': horas } = data.input;

    mostrarResultado(`${horas} horas trabajadas → Salario semanal: ${data.respuesta} €`);
}