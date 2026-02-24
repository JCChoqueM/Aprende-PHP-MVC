/**
 * Tema 2, Ejercicio 9: Volumen de Cilindro
 * operandos: {radio, altura}
 * resultados: {volumen}
 */
export function tema2_ejercicio9(respuesta) {
    const { operandos: { radio, altura }, resultados: { volumen } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 9: Volumen de Cilindro</h3>
            <div class="container">
                <div class="item"><span>Radio (r):</span> <strong>${radio} m</strong></div>
                <div class="item"><span>Altura (h):</span> <strong>${altura} m</strong></div>
                <div class="item total"><span>Volumen (π × r² × h):</span> <strong>${volumen.toLocaleString()} m³</strong></div>
            </div>
        </div>
    `;
}
