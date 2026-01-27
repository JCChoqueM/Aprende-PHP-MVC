// ============================================
// src/js/app.js
// Punto de entrada de la aplicación
// ============================================

import { obtenerParametrosRuta } from './utils.js';
import { FormularioEjercicio } from './formulario.js';

class Aplicacion {
    iniciar() {
        // Obtener elementos del DOM
        const formulario = document.getElementById("exerciseForm");
        const botonResolver = document.getElementById("btnResolver");
        
        // Validaciones iniciales
        if (!formulario) {
            console.warn("Formulario no encontrado");
            return;
        }

        const parametrosRuta = obtenerParametrosRuta();
        
        if (!parametrosRuta) {
            console.warn("URL inválida. Formato esperado: /tema1/ejercicio2");
            return;
        }

        // Crear e inicializar formulario
        const formEjercicio = new FormularioEjercicio(formulario, parametrosRuta);
        formEjercicio.configurarEventos(botonResolver);
    }
}

// Iniciar aplicación cuando cargue el DOM
document.addEventListener("DOMContentLoaded", () => {
    const app = new Aplicacion();
    app.iniciar();
});