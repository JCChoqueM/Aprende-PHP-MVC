// ============================================
// 06-ResultadoRenderer.js
// Renderiza respuestas del backend
// ============================================
// 
// Transforma respuestas JSON de APIController en HTML visual
// 
// Tipos soportados (desde API/Resultado/*.php):
//   1. result   → Resultado_Scalar, Resultado_Texto
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
}
