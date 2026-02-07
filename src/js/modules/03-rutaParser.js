// ============================================
// 03-rutaParser.js - Parser de rutas URL
// NIVEL: Base - No depende de nadie
// ============================================

export class RutaParser {
    static PATRON = /tema(\d+)\/ejercicio(\d+)/;

    static obtenerParametros(pathname = window.location.pathname) {
        const coincidencia = pathname.match(this.PATRON);
        
        if (!coincidencia) {
            return null;
        }

        return {
            tema: Number(coincidencia[1]),
            ejercicio: Number(coincidencia[2])
        };
    }

    static esRutaValida(pathname = window.location.pathname) {
        return this.PATRON.test(pathname);
    }
}