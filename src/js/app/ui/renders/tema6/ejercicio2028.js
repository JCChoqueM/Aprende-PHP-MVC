import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const r = data.respuesta;

    mostrarResultado(`
        Array generado: ${r.array.join(', ')} <br><br>
        Mínimo → ${r.minimo} <br>
        Máximo → ${r.maximo} <br>
        Media → ${r.media} <br>
        ¿Está el mínimo en el array? → ${r.estaEn ? 'Sí' : 'No'} <br>
        Posición del mínimo → ${r.posicion} <br>
        Array volteado → ${r.volteado.join(', ')} <br>
        Rotado 1 derecha → ${r.rotadoDerecha.join(', ')} <br>
        Rotado 1 izquierda → ${r.rotadoIzquierda.join(', ')}
    `);
}
