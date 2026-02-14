// ============================================
// 06-ResultadoRenderer.js
// Responsable únicamente de renderizar respuestas
// ============================================

import { renderList } from '../templates/list.template.js';
import { renderResult } from '../templates/result.template.js';
import { renderTable } from '../templates/table.template.js';
import { renderEvaluation } from '../templates/evaluation.template.js';
import { renderGraphic } from '../templates/graphic.template.js';

export class ResultadoRenderer {

    /**
     * @param {HTMLElement} elementoResultado
     */
    constructor(elementoResultado) {
        this.elemento = elementoResultado;
    }

    /**
     * Renderiza la respuesta según su tipo
     * @param {Object} respuesta
     */
    render(respuesta) {

        if (!this.elemento || !respuesta) return;

        let html = '';

        switch (respuesta.type) {

            case 'list':
                html = renderList(respuesta.data.items);
                break;

            case 'result':
                html = renderResult(
                    respuesta.data.label,
                    respuesta.data.value,
                    respuesta.data.suffix ?? ''
                );
                break;

            case 'table':
                html = renderTable(
                    respuesta.data.headers,
                    respuesta.data.rows
                );
                break;

            case 'evaluation':
                html = renderEvaluation(
                    respuesta.data.ok,
                    respuesta.data.message
                );
                break;

            case 'graphic':
                html = renderGraphic(respuesta.data.lines);
                break;

            default:
                html = '<p>Tipo de resultado no soportado</p>';
        }

        this.elemento.innerHTML = html;
    }
}
