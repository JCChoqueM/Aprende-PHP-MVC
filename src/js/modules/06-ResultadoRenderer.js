// ============================================
// 06-ResultadoRenderer.js
// Renderiza respuestas del backend
// ============================================
// 
// Sistema sin if/switch: cada tipo tiene su propio método
// Busca automáticamente el método correspondiente por type
// 
// Estructura: { type: 'tema2_ejercicio1', ok: boolean, operandos: {}, resultados: {} }

import { renderizadores } from './renderers/index.js';

export class ResultadoRenderer {

    constructor(elementoResultado) {
        this.elemento = elementoResultado;

        // Registrar dinámicamente todos los renderizadores desde el Map
        // Esto permite agregar 400+ ejercicios sin modificar este código
        Object.entries(renderizadores).forEach(([nombreMetodo, funcionRender]) => {
            this[nombreMetodo] = funcionRender;
        });
    }

    /**
     * Renderiza cualquier  respuesta buscando el método específico por type
     * type: 'tema2_ejercicio1' → busca método 'tema2_ejercicio1'
     * Sin transformación, el type mapea directamente al nombre del método
     */
    render(respuesta) {
        if (!this.elemento || !respuesta || !respuesta.type) return;

        // Buscar directamente por type: tema2_ejercicio1 existe como método
        if (typeof this[respuesta.type] === 'function') {
            const html = this[respuesta.type](respuesta);
            this.elemento.innerHTML = html;
        }
    }


}
