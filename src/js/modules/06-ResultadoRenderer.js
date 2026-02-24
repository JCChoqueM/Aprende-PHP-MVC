// ============================================
// 06-ResultadoRenderer.js
// Renderiza respuestas del backend
// ============================================
// 
// Transforma respuestas JSON de APIController en HTML visual
// 
// Tipos soportados (desde API/Resultado/*.php):
//   1. result   → Resultado_JSON (genérico)
//   2. table    → Resultado_Tabla
//   3. list     → Resultado_Lista
//   4. evaluation → Errores manejados por FormularioEjercicio
// 
// Estructura esperada:
//   { type: 'result', data: { label: '...', value: '...', ok: true } }
//   { type: 'table', data: { headers: [...], rows: [...], ok: true } }
//   { type: 'list', data: { descripcion: '...', valores: [...], ok: true } }

export class ResultadoRenderer {

    /**
     * @param {HTMLElement} elementoResultado - Elemento donde renderizar
     */
    constructor(elementoResultado) {
        this.elemento = elementoResultado;
    }

    /**
     * Renderiza respuesta JSON del backend
     * @param {Object} respuesta - { type: string, data: Object }
     */
    render(respuesta) {

        if (!this.elemento || !respuesta) return;

        let html = '';

        switch (respuesta.type) {

            case 'result':
                html = this.renderizarResultado(respuesta.data);
                break;

            case 'table':
                html = this.renderizarTabla(respuesta.data);
                break;

            case 'list':
                html = this.renderizarLista(respuesta.data);
                break;

            case 'evaluation':
                html = this.renderizarEvaluacion(respuesta.data);
                break;

            case 'error':
                html = this.renderizarError(respuesta.data);
                break;

            case 'operaciones':
                html = this.renderizarOperaciones(respuesta.data);
                break;

            case 'factura':
                html = this.renderizarFactura(respuesta.data);
                break;

            case 'multiplicacion':
                html = this.renderizarMultiplicacion(respuesta.data);
                break;

            case 'conversion':
                html = this.renderizarConversion(respuesta.data);
                break;

            case 'conversion_bol':
                html = this.renderizarConversionBol(respuesta.data);
                break;

            case 'area':
                html = this.renderizarArea(respuesta.data);
                break;

            case 'area_triangulo':
                html = this.renderizarAreaTriangulo(respuesta.data);
                break;

            case 'area_cuadrado':
                html = this.renderizarAreaCuadrado(respuesta.data);
                break;

            case 'area_circulo':
                html = this.renderizarAreaCirculo(respuesta.data);
                break;

            case 'volumen':
                html = this.renderizarVolumen(respuesta.data);
                break;

            default:
                html = `<div class="resultado-error">Tipo de resultado no soportado: ${respuesta.type}</div>`;
        }

        this.elemento.innerHTML = html;
    }

    /**
     * Renderiza resultado simple (scalar o texto)
     */
    renderizarResultado(data) {
        return `
            <div class="resultado-exito">
                <strong>${data.label}:</strong>
                ${data.value}
            </div>
        `;
    }

    /**
     * Renderiza tabla de datos
     */
    renderizarTabla(data) {
        const headers = data.headers.map(h => `<th>${h}</th>`).join('');
        const rows = data.rows.map(row => {
            const cells = row.map(cell => `<td>${cell}</td>`).join('');
            return `<tr>${cells}</tr>`;
        }).join('');

        return `
            <div class="resultado-exito">
                <table>
                    <thead>
                        <tr>${headers}</tr>
                    </thead>
                    <tbody>
                        ${rows}
                    </tbody>
                </table>
            </div>
        `;
    }

    /**
     * Renderiza lista de valores
     */
    renderizarLista(data) {
        const items = data.valores.map(v => `<li>${v}</li>`).join('');

        return `
            <div class="resultado-exito">
                <p><strong>${data.descripcion}:</strong></p>
                <ul>
                    ${items}
                </ul>
            </div>
        `;
    }

    /**
     * Renderiza evaluación (feedback al usuario)
     */
    renderizarEvaluacion(data) {
        const clase = data.ok ? 'resultado-exito' : 'resultado-error';
        return `
            <div class="${clase}">
                ${data.message}
            </div>
        `;
    }

    /**
     * Renderiza errores de validación
     * Solo recibe array de errores, JavaScript los formatea
     */
    renderizarError(data) {
        const { errores } = data;
        const listaErrores = errores.map(error => `<li>${error}</li>`).join('');

        return `
            <div class="resultado-error">
                <h4>Errores de validación:</h4>
                <ul class="error-list">
                    ${listaErrores}
                </ul>
            </div>
        `;
    }

    /**
     * Renderiza operaciones matemáticas
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarOperaciones(data) {
        const { a, b, suma, resta, multiplicacion, division } = data;

        // JavaScript genera la estructura
        const operaciones = [
            { simbolo: '+', nombre: 'Suma', resultado: suma },
            { simbolo: '-', nombre: 'Resta', resultado: resta },
            { simbolo: '×', nombre: 'Multiplicación', resultado: multiplicacion },
            {
                simbolo: '÷',
                nombre: 'División',
                resultado: b === 0 ? 'No definida' : division
            }
        ];

        const filas = operaciones.map(op => {
            let formula = `${a} ${op.simbolo} ${b} = `;

            if (typeof op.resultado === 'string') {
                return `<div class="operacion-item">
                    ${formula} <em>${op.resultado}</em>
                </div>`;
            }
            return `<div class="operacion-item">
                ${formula} <strong>${op.resultado}</strong>
            </div>`;
        }).join('');

        return `
            <div class="resultado-exito">
                <h3>Operaciones Matemáticas</h3>
                <div class="operaciones-container">
                    ${filas}
                </div>
            </div>
        `;
    }

    /**
     * Renderiza factura con desglose de precios
     * JavaScript genera el texto a partir de datos mínimos
     */
    renderizarFactura(data) {
        const { precioBase, porcentajeIVA, montoIVA, total } = data;

        return `
            <div class="resultado-exito">
                <h3>Cálculo de Factura</h3>
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

    /**
     * Renderiza multiplicación con desglose de operandos y resultado
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarMultiplicacion(data) {
        const { a, b, resultado } = data;

        return `
            <div class="resultado-exito">
                <h3>Resultado de la multiplicación</h3>
                <div class="operacion-simple">
                    <div class="operacion-formula">
                        ${a} × ${b} = <strong>${resultado}</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza conversión de dólares a bolivianos (USD → BOB)
     * JavaScript genera el texto a partir de datos mínimos
     */
    renderizarConversion(data) {
        const { cantidad, resultado } = data;
        const tasaCambio = 6.96; // Dato conocido

        return `
            <div class="resultado-exito">
                <h3>Conversión de dólares a bolivianos</h3>
                <div class="conversion-container">
                    <div class="conversion-item">
                        <span>Cantidad:</span>
                        <strong>${cantidad} USD</strong>
                    </div>
                    <div class="conversion-item">
                        <span>Tasa de cambio:</span>
                        <strong>1 USD = ${tasaCambio} BOB</strong>
                    </div>
                    <div class="conversion-item total">
                        <span>Resultado:</span>
                        <strong>${resultado} BOB</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza conversión de bolivianos a dólares (BOB → USD)
     * JavaScript genera el texto a partir de datos mínimos
     */
    renderizarConversionBol(data) {
        const { cantidad, resultado } = data;
        const tasaCambio = 6.96; // Dato conocido

        return `
            <div class="resultado-exito">
                <h3>Conversión de bolivianos a dólares</h3>
                <div class="conversion-container">
                    <div class="conversion-item">
                        <span>Cantidad:</span>
                        <strong>${cantidad} BOB</strong>
                    </div>
                    <div class="conversion-item">
                        <span>Tasa de cambio:</span>
                        <strong>1 USD = ${tasaCambio} BOB</strong>
                    </div>
                    <div class="conversion-item total">
                        <span>Resultado:</span>
                        <strong>${resultado} USD</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza área de rectángulo
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarArea(data) {
        const { base, altura, area } = data;

        return `
            <div class="resultado-exito">
                <h3>Área del Rectángulo</h3>
                <div class="area-container">
                    <div class="area-item">
                        <span>Base:</span>
                        <strong>${base} m</strong>
                    </div>
                    <div class="area-item">
                        <span>Altura:</span>
                        <strong>${altura} m</strong>
                    </div>
                    <div class="area-item total">
                        <span>Área:</span>
                        <strong>${area} m²</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza área de triángulo
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarAreaTriangulo(data) {
        const { base, altura, area } = data;

        return `
            <div class="resultado-exito">
                <h3>Área del Triángulo</h3>
                <div class="area-container">
                    <div class="area-item">
                        <span>Base:</span>
                        <strong>${base} m</strong>
                    </div>
                    <div class="area-item">
                        <span>Altura:</span>
                        <strong>${altura} m</strong>
                    </div>
                    <div class="area-item total">
                        <span>Área (base × altura / 2):</span>
                        <strong>${area} m²</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza área de cuadrado
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarAreaCuadrado(data) {
        const { lado, area } = data;

        return `
            <div class="resultado-exito">
                <h3>Área del Cuadrado</h3>
                <div class="area-container">
                    <div class="area-item">
                        <span>Lado:</span>
                        <strong>${lado} m</strong>
                    </div>
                    <div class="area-item total">
                        <span>Área (lado²):</span>
                        <strong>${area} m²</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza área de círculo
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarAreaCirculo(data) {
        const { radio, area } = data;
        const pi = 3.14159265359;

        return `
            <div class="resultado-exito">
                <h3>Área del Círculo</h3>
                <div class="area-container">
                    <div class="area-item">
                        <span>Radio:</span>
                        <strong>${radio} m</strong>
                    </div>
                    <div class="area-item total">
                        <span>Área (π × r²):</span>
                        <strong>${area} m²</strong>
                    </div>
                </div>
            </div>
        `;
    }

    /**
     * Renderiza volumen de cilindro
     * JavaScript genera el formato a partir de datos mínimos
     */
    renderizarVolumen(data) {
        const { radio, altura, volumen } = data;
        const pi = 3.14159265359;

        return `
            <div class="resultado-exito">
                <h3>Volumen del Cilindro</h3>
                <div class="volumen-container">
                    <div class="volumen-item">
                        <span>Radio:</span>
                        <strong>${radio} m</strong>
                    </div>
                    <div class="volumen-item">
                        <span>Altura:</span>
                        <strong>${altura} m</strong>
                    </div>
                    <div class="volumen-item total">
                        <span>Volumen (π × r² × h):</span>
                        <strong>${volumen} m³</strong>
                    </div>
                </div>
            </div>
        `;
    }
}
