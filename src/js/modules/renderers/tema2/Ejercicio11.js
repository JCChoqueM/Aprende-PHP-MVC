/**
 * Tema 2, Ejercicio 11: Área de Círculo
 * operandos: {radio}
 * resultados: {area}
 */
export function tema2_ejercicio11(respuesta) {
    const { operandos: { radio }, resultados: { area } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 11: Área de Círculo</h3>
            <div class="container">
                <div class="item"><span>Radio:</span> <strong>${radio} m</strong></div>
                <div class="item total"><span>Área (π × r²):</span> <strong>${area.toLocaleString()} m²</strong></div>
            </div>
        </div>
    `;
}
