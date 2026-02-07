// ============================================
// 06-ResultadoRenderer.js - Renderizado de resultados
// NIVEL: Intermedio - No depende de nadie
// ============================================

export class ResultadoRenderer {
    constructor(elementoResultado) {
        this.elemento = elementoResultado;
    }

    mostrarExito(mensaje) {
        if (!this.elemento) return;
        
        this.elemento.innerHTML = this.crearHtml('exito', mensaje);
    }

    mostrarError(mensaje) {
        if (!this.elemento) return;
        
        this.elemento.innerHTML = this.crearHtml('error', mensaje);
    }

    limpiar() {
        if (this.elemento) {
            this.elemento.innerHTML = '';
        }
    }

    crearHtml(tipo, mensaje) {
        const clase = tipo === 'exito' ? 'resultado-exito' : 'resultado-error';
        return `<div class="${clase}">${mensaje || this.getMensajeDefault(tipo)}</div>`;
    }

    getMensajeDefault(tipo) {
        return tipo === 'exito' ? 'Operación exitosa' : 'Error al procesar';
    }
}