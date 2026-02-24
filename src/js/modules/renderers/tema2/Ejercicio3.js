/**
 * Tema 2, Ejercicio 3: Bolivianos a Dólares
 * operandos: {cantidad}
 * resultados: {resultado}
 */
export function tema2_ejercicio3(respuesta) {
    const { operandos: { cantidad }, resultados: { resultado } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 3: BOB a USD</h3>
            <div class="container">
                <div class="item"><span>Cantidad Bs:</span> <strong>${cantidad.toLocaleString()} Bs.</strong></div>
                <div class="item total"><span>Equivalente en USD:</span> <strong>$${resultado.toLocaleString()}</strong></div>
            </div>
        </div>
    `;
}
