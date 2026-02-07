// ============================================
// 07-FormularioEjercicio.js - Controlador del formulario
// NIVEL: Alto - Depende de: 02, 05, 06
// ============================================

import { debounce } from './02-debounce.js';
import { EjercicioService } from './05-EjercicioService.js';
import { ResultadoRenderer } from './06-ResultadoRenderer.js';

export class FormularioEjercicio {
    constructor(
        formulario, 
        parametrosRuta,
        ejercicioService = new EjercicioService(),
        resultadoRenderer = new ResultadoRenderer(document.getElementById("phpResult"))
    ) {
        this.formulario = formulario;
        this.parametrosRuta = parametrosRuta;
        this.ejercicioService = ejercicioService;
        this.renderer = resultadoRenderer;
        
        this.enviarConRetraso = debounce(() => this.enviar(), 4000);
    }

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

    procesarRespuesta(respuesta) {
        if (respuesta.error) {
            this.renderer.mostrarError(respuesta.mensaje);
        } else {
            this.renderer.mostrarExito(respuesta.mensaje);
        }
    }

    manejarError(error) {
        console.error("Error al enviar ejercicio:", error);
        
        const mensaje = error.name === 'NetworkError' 
            ? 'Error de conexión con el servidor'
            : 'Error inesperado al procesar la solicitud';
            
        this.renderer.mostrarError(mensaje);
    }

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