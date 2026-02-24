// ============================================
// 05-EjercicioService.js - Servicio de ejercicios
// NIVEL: Intermedio - Depende de: 04-HttpClient.js
// ============================================
// 
// CONEXIÓN CON BACKEND:
// Este servicio construye URLs que disparan rutas POST en index.php
// Ruta: /api/tema{tema}/ejercicio{ejercicio}
// Manejador: APIController::ejercicioAPI($router, $tema, $ejercicio)
// 
// El APIController entonces carga y ejecuta:
//   \API\Tema{$tema}\Ejercicio{$ejercicio}::procesar($router)
// 
// Espera respuesta JSON con estructura:
//   { type: 'result', data: { label: '...', value: '...' } }
//   o
//   { type: 'evaluation', data: { ok: true/false, message: '...' } }

import { HttpClient } from './04-HttpClient.js';

export class EjercicioService {
    constructor(httpClient = new HttpClient()) {
        this.httpClient = httpClient;
    }

    /**
     * Envía datos del formulario al backend
     * @param {number} tema - Número de tema
     * @param {number} ejercicio - Número de ejercicio
     * @param {HTMLFormElement} formulario - Formulario con datos
     * @returns {Promise<Object>} Respuesta JSON del backend
     */
    async enviar(tema, ejercicio, formulario) {
        const url = this.construirUrl(tema, ejercicio);
        const formData = new FormData(formulario);

        return await this.httpClient.post(url, formData);
    }

    /**
     * Construye URL que dispara APIController
     * @param {number} tema
     * @param {number} ejercicio
     * @returns {string} URL /api/tema{tema}/ejercicio{ejercicio}
     */
    construirUrl(tema, ejercicio) {
        return `/api/tema${tema}/ejercicio${ejercicio}`;
    }
}