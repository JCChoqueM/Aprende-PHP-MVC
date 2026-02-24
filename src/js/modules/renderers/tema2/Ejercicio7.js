/**
 * Tema 2, Ejercicio 7: Factura con IVA
 * operandos: {precioBase, porcentajeIVA}
 * resultados: {montoIVA, total}
 */
export function tema2_ejercicio7(respuesta) {
    const { operandos: { precioBase, porcentajeIVA }, resultados: { montoIVA, total } } = respuesta;
    return `
        <div class="resultado-exito">
            <h3>Tema 2 - Ejercicio 7: Cálculo de Factura</h3>
            <div class="factura-container">
                <div class="factura-item">
                    <span>Precio Base:</span>
                    <strong>${precioBase.toLocaleString()} Bs.</strong>
                </div>
                <div class="factura-item">
                    <span>IVA (${porcentajeIVA}%):</span>
                    <strong>${montoIVA.toLocaleString()} Bs.</strong>
                </div>
                <div class="factura-item total">
                    <span>Total a Pagar:</span>
                    <strong>${total.toLocaleString()} Bs.</strong>
                </div>
            </div>
        </div>
    `;
}
