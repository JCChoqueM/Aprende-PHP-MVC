/**
 * Tema 2, Ejercicio 10: Área de Cuadrado
 * operandos: {lado}
 * resultados: {area}
 */
export function tema2_ejercicio10(respuesta) {
    const { operandos: { lado }, resultados: { area } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 10: Área de Cuadrado</h3>
            <div class="container">
                <div class="item"><span>Lado:</span> <strong>${lado} m</strong></div>
                <div class="item total"><span>Área (${lado}²):</span> <strong>${area} m²</strong></div>
            </div>
        </div>
    `;
}
