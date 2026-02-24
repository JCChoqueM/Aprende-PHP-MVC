// ============================================
// 06-ResultadoRenderer.js
// Renderiza respuestas del backend
// ============================================

export class ResultadoRenderer {

    constructor(elementoResultado) {
        this.elemento = elementoResultado;
    }

    render(respuesta) {

        if (!this.elemento || !respuesta) return;

        let html = '';

        switch (respuesta.type) {

            case 'result':
                html = `
                    <div class="resultado-exito">
                        <strong>${respuesta.data.label}:</strong>
                        ${respuesta.data.value}
                    </div>
                `;
                break;

            case 'evaluation':
                const clase = respuesta.data.ok
                    ? 'resultado-exito'
                    : 'resultado-error';

                html = `
                    <div class="${clase}">
                        ${respuesta.data.message}
                    </div>
                `;
                break;

            default:
                html = '<div>Tipo de resultado no soportad32o</div>';
        }

        this.elemento.innerHTML = html;
    }
}
