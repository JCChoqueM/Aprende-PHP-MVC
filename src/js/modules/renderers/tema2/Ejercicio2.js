/**
 * Tema 2, Ejercicio 2: Dólares a Bolivianos
 * operandos: {cantidad}
 * resultados: {resultado}
 */
export function tema2_ejercicio2(respuesta) {
    const { operandos: { cantidad }, resultados: { resultado } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 2: USD a BOB</h3>
            <div class="container">
                <div class="item"><span>Cantidad USD:</span> <strong>$${cantidad.toLocaleString()}</strong></div>
                <div class="item total"><span>Equivalente en Bs:</span> <strong>${resultado.toLocaleString()} Bs.</strong></div>
            </div>
        </div>
    `;
}
