/**
 * Renderers centralizados
 * Exporta un Map con todos los renderizadores para carga dinámica escalable
 * Permite agregar 400+ ejercicios sin modificar ResultadoRenderer.js
 */

import { tema2_ejercicio1 } from './tema2/Ejercicio1.js';
import { tema2_ejercicio2 } from './tema2/Ejercicio2.js';
import { tema2_ejercicio3 } from './tema2/Ejercicio3.js';
import { tema2_ejercicio4 } from './tema2/Ejercicio4.js';
import { tema2_ejercicio5 } from './tema2/Ejercicio5.js';
import { tema2_ejercicio6 } from './tema2/Ejercicio6.js';
import { tema2_ejercicio7 } from './tema2/Ejercicio7.js';
import { tema2_ejercicio8 } from './tema2/Ejercicio8.js';
import { tema2_ejercicio9 } from './tema2/Ejercicio9.js';
import { tema2_ejercicio10 } from './tema2/Ejercicio10.js';
import { tema2_ejercicio11 } from './tema2/Ejercicio11.js';

/**
 * Map de todos los renderizadores
 * Estructura: { 'tema2_ejercicio1': function, 'tema2_ejercicio2': function, ... }
 * 
 * El type del API mapea directamente sin transformación:
 * API: { type: 'tema2_ejercicio1', ... }
 * Búsqueda: this['tema2_ejercicio1'](respuesta)
 */
export const renderizadores = {
    tema2_ejercicio1,
    tema2_ejercicio2,
    tema2_ejercicio3,
    tema2_ejercicio4,
    tema2_ejercicio5,
    tema2_ejercicio6,
    tema2_ejercicio7,
    tema2_ejercicio8,
    tema2_ejercicio9,
    tema2_ejercicio10,
    tema2_ejercicio11,
};
