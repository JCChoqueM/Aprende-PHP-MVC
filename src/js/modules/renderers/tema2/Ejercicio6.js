/**
 * Tema 2, Ejercicio 6: Área de Triángulo
 * operandos: {base, altura}
 * resultados: {area}
 */
export function tema2_ejercicio6(respuesta) {
    const { operandos: { base, altura }, resultados: { area } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 6: Área de Triángulo</h3>
            <div class="container">
                <div class="item"><span>Base:</span> <strong>${base} m</strong></div>
                <div class="item"><span>Altura:</span> <strong>${altura} m</strong></div>
                <div class="item total"><span>Área (${base} × ${altura} ÷ 2):</span> <strong>${area} m²</strong></div>
            </div>
        </div>
    `;
}
