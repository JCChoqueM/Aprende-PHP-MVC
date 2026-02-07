// ============================================
// src/js/formulario.js
// Lógica del formulario de ejercicios
// ============================================

import { enviarEjercicio } from './api.js';
import { debounce } from './utils.js';

export class FormularioEjercicio {
    constructor(formulario, parametrosRuta) {
        this.formulario = formulario;
        this.parametrosRuta = parametrosRuta;
        this.elementoResultado = document.getElementById("phpResult");
        
        // Crear versión con debounce del método enviar
        this.enviarConRetraso = debounce(() => this.enviar(), 4000);
    }

    async enviar() {
        try {
            // Validar que haya contenido
            // if (!this.validarFormulario()) {
            //     this.mostrarMensaje("Por favor, completa el ejercicio");
            //     return;
            // }

            // Enviar al servidor
            const respuesta = await enviarEjercicio(this.parametrosRuta, this.formulario);
            
            // Mostrar resultado
            this.mostrarMensaje(respuesta.mensaje);
            
        } catch (error) {
            console.error("Error al enviar:", error);
            this.mostrarMensaje("Error al procesar el ejercicio");
        }
    }

    validarFormulario() {
        const datos = new FormData(this.formulario);
        
        // Verificar que al menos un campo tenga valor
        for (let [key, value] of datos.entries()) {
            if (value.trim()) return true;
        }
        
        return false;
    }

    mostrarMensaje(mensaje) {
        if (this.elementoResultado) {
            this.elementoResultado.innerHTML= mensaje || "Sin respuesta";
        }
    }

    configurarEventos(botonResolver) {
        // Envío automático al escribir (con delay de 4 segundos)
        this.formulario.addEventListener("input", () => {
            this.enviarConRetraso();
        });

        // Envío inmediato al hacer click
        if (botonResolver) {
            botonResolver.addEventListener("click", () => {
                this.enviar();
            });
        }
    }
}
