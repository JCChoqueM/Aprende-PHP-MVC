// ============================================
// 08-app.js - Punto de entrada
// Orquestador principal
// ============================================

import { RutaParser } from './03-rutaParser.js';
import { HttpClient } from './04-HttpClient.js';
import { EjercicioService } from './05-EjercicioService.js';
import { ResultadoRenderer } from './06-ResultadoRenderer.js';
import { FormularioEjercicio } from './07-FormularioEjercicio.js';

class Aplicacion {

    constructor() {
        this.formulario = null;
        this.botonResolver = null;
        this.parametrosRuta = null;
    }

    iniciar() {

        if (!this.validarElementosDOM()) return;
        if (!this.validarRuta()) return;

        this.inicializarFormulario();
    }

    validarElementosDOM() {

        this.formulario = document.getElementById("exerciseForm");
        this.botonResolver = document.getElementById("btnResolver");

        if (!this.formulario) {
            console.warn("Formulario no encontrado en el DOM");
            return false;
        }

        return true;
    }

    validarRuta() {

        this.parametrosRuta = RutaParser.obtenerParametros();

        if (!this.parametrosRuta) {
            console.warn("URL inválida. Formato esperado: /tema1/ejercicio2");
            return false;
        }

        return true;
    }

    inicializarFormulario() {

        const httpClient = new HttpClient();
        const ejercicioService = new EjercicioService(httpClient);

        const elementoResultado = document.getElementById("phpResult");
        const resultadoRenderer = new ResultadoRenderer(elementoResultado);

        const formEjercicio = new FormularioEjercicio(
            this.formulario,
            this.parametrosRuta,
            ejercicioService,
            resultadoRenderer
        );

        formEjercicio.configurarEventos(this.botonResolver);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const app = new Aplicacion();
    app.iniciar();
});
