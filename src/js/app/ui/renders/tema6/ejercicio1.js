// ─── ejercicio1.js - esCapicua ───────────────────────────────────────────────
import { mostrarResultado } from '../../renderResult.js';
export function render(data) {
    const { Número: n } = data.input;
    mostrarResultado(`El número ${n} ${data.respuesta ? 'es capicúa' : 'no es capicúa'}`);
}
