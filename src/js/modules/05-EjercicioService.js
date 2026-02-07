// ============================================
// 05-EjercicioService.js - Servicio de ejercicios
// NIVEL: Intermedio - Depende de: 04-HttpClient.js
// ============================================

import { HttpClient } from './04-HttpClient.js';

export class EjercicioService {
    constructor(httpClient = new HttpClient()) {
        this.httpClient = httpClient;
    }

    async enviar(tema, ejercicio, formulario) {
        const url = this.construirUrl(tema, ejercicio);
        const formData = new FormData(formulario);
        
        return await this.httpClient.post(url, formData);
    }

    construirUrl(tema, ejercicio) {
        return `/api/tema${tema}/ejercicio${ejercicio}`;
    }
}