/**
 * Tema 2, Ejercicio 8: Área de Rectángulo 2
 * operandos: {base, altura}
 * resultados: {area}
 */
export function tema2_ejercicio8(respuesta) {
    const { operandos: { base, altura }, resultados: { area } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 8: Área de Rectángulo</h3>
            <div class="container">
                <div class="item"><span>Base:</span> <strong>${base} m</strong></div>
                <div class="item"><span>Altura:</span> <strong>${altura} m</strong></div>
                <div class="item total"><span>Área:</span> <strong>${area} m²</strong></div>
            </div>
        </div>
    `;
}
