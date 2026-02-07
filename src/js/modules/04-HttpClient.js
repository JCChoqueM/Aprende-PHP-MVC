// ============================================
// 04-HttpClient.js - Cliente HTTP genérico
// NIVEL: Intermedio - Depende de: 01-errors.js
// ============================================

import { NetworkError } from './01-errors.js';

export class HttpClient {
    async post(url, formData) {
        try {
            const response = await fetch(url, {
                method: "POST",
                body: formData
            });

            return await response.json();
        } catch (error) {
            throw new NetworkError('No se pudo conectar con el servidor', error);
        }
    }
}