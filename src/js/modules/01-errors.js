// ============================================
// 01-errors.js - Errores personalizados
// NIVEL: Base - No depende de nadie
// ============================================

export class NetworkError extends Error {
    constructor(message, originalError) {
        super(message);
        this.name = 'NetworkError';
        this.originalError = originalError;
    }
}