// ============================================
// 07-FormularioEjercicio.js
// Controlador del formulario
// Responsable de coordinar envío y renderizado
// ============================================

import { debounce } from './02-debounce.js';

export class FormularioEjercicio {

    /**
     * @param {HTMLFormElement} formulario
     * @param {Object} parametrosRuta
     * @param {EjercicioService} ejercicioService
     * @param {ResultadoRenderer} resultadoRenderer
     */
    constructor(formulario, parametrosRuta, ejercicioService, resultadoRenderer) {

    if (!resultadoRenderer || typeof resultadoRenderer.render !== 'function') {
        throw new Error('ResultadoRenderer inválido: no tiene método render()');
    }

    this.formulario = formulario;
    this.parametrosRuta = parametrosRuta;
    this.ejercicioService = ejercicioService;
    this.renderer = resultadoRenderer;
     this.enviarConRetraso = debounce(
            this.enviar.bind(this),
            4000
        );
}


    /**
     * Envía los datos al backend
     */
    async enviar() {

        try {

            const respuesta = await this.ejercicioService.enviar(
                this.parametrosRuta.tema,
                this.parametrosRuta.ejercicio,
                this.formulario
            );

            this.procesarRespuesta(respuesta);

        } catch (error) {

            this.manejarError(error);
        }
    }

    /**
     * Delegar renderizado al renderer
     */
    procesarRespuesta(respuesta) {

        this.renderer.render(respuesta);
    }

    /**
     * Manejo centralizado de errores
     */
    manejarError(error) {

        console.error("Error al enviar ejercicio:", error);

        this.renderer.render({
            type: 'evaluation',
            data: {
                ok: false,
                message: 'Error al procesar la solicitud'
            }
        });
    }

    /**
     * Configuración de eventos
     */
    configurarEventos(botonResolver) {

        this.configurarEnvioAutomatico();
        this.configurarBotonResolver(botonResolver);
        this.configurarSubmit();
    }

    configurarEnvioAutomatico() {

        this.formulario.addEventListener("input", () => {
            this.enviarConRetraso();
        });
    }

    configurarBotonResolver(boton) {

        if (!boton) return;

        boton.addEventListener("click", (e) => {
            e.preventDefault();
            this.enviar();
        });
    }

    configurarSubmit() {

        this.formulario.addEventListener("submit", (e) => {
            e.preventDefault();
            this.enviar();
        });
    }

}