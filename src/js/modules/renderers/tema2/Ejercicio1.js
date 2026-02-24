/**
 * Tema 2, Ejercicio 1: Multiplicación
 * operandos: {a, b}
 * resultados: {resultado}
 */
export function tema2_ejercicio1(respuesta) {
    const { operandos: { a, b }, resultados: { resultado } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 1: Multiplicación</h3>
            <div class="container">
                <div class="item"><span>Número 1:</span> <strong>${a}</strong></div>
                <div class="item"><span>Número 2:</span> <strong>${b}</strong></div>
                <div class="item total"><span>Resultado (${a} × ${b}):</span> <strong>${resultado}</strong></div>
            </div>
        </div>
    `;
}
