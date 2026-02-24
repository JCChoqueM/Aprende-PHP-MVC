/**
 * Tema 2, Ejercicio 4: Operaciones Matemáticas
 * operandos: {a, b}
 * resultados: [{formula, valor}, ...]
 */
export function tema2_ejercicio4(respuesta) {
    const { operandos: { a, b }, resultados } = respuesta;
    const filas = resultados.map(op => `
        <div class="operacion-item">
            ${op.formula}
        </div>
    `).join('');

    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 4: Operaciones</h3>
            <div class="container">
                <div class="item"><span>Número A:</span> <strong>${a}</strong></div>
                <div class="item"><span>Número B:</span> <strong>${b}</strong></div>
                <div class="operaciones-container">
                    ${filas}
                </div>
            </div>
        </div>
    `;
}
