# Estructura de Renderizadores

## Principio: Sin Transformación

**El type del API es directamente el nombre de la función.**

- API devuelve: `{ type: 'tema2_ejercicio1', ... }`
- Función: `export function tema2_ejercicio1(respuesta)`
- Búsqueda: `this['tema2_ejercicio1'](respuesta)`

**Eso es todo. No hay transformaciones.**

## Flujo Ultra-Simple

```
API response:
{ type: 'tema2_ejercicio1', ok: true, operandos: {...}, resultados: {...} }
     ↓
render(respuesta)
     ↓
if (typeof this[respuesta.type] === 'function') {  // ✓ existe
     ↓
this[respuesta.type](respuesta)                      // ✓ ejecuta
     ↓
return html                                          // ✓ renderiza
```

## Constructor Dinámico

```javascript
constructor(elementoResultado) {
    this.elemento = elementoResultado;

    // Registra: this['tema2_ejercicio1'] = function
    //           this['tema2_ejercicio2'] = function
    //           ... (sin cambiar un script más)
    Object.entries(renderizadores).forEach(([nombreMetodo, funcionRender]) => {
        this[nombreMetodo] = funcionRender;
    });
}
```

## Render Method

```javascript
render(respuesta) {
    if (!this.elemento || !respuesta || !respuesta.type) return;

    // Sin tipoAMetodo(), sin transformación, búsqueda directa
    if (typeof this[respuesta.type] === 'function') {
        const html = this[respuesta.type](respuesta);
        this.elemento.innerHTML = html;
    }
}
```

## Estructura de Archivos

```
src/js/modules/
├── 06-ResultadoRenderer.js (41 líneas)
└── renderers/
    ├── index.js
    └── tema2/
        ├── Ejercicio1.js → export function tema2_ejercicio1(respuesta)
        ├── Ejercicio2.js → export function tema2_ejercicio2(respuesta)
        ├── ...
        └── Ejercicio11.js → export function tema2_ejercicio11(respuesta)
```

## Para Agregar Ejercicio 12

**Paso 1:** Crear archivo

```javascript
// src/js/modules/renderers/tema2/Ejercicio12.js
export function tema2_ejercicio12(respuesta) {
  // render logic
  return html;
}
```

**Paso 2:** Importar en `index.js`

```javascript
import { tema2_ejercicio12 } from './tema2/Ejercicio12.js';
```

**Paso 3:** Agregar al Map

```javascript
export const renderizadores = {
  tema2_ejercicio1,
  // ...
  tema2_ejercicio12, // ← aquí
};
```

**Paso 4:** ResultadoRenderer.js **NO CAMBIA NI UNA LÍNEA** ✅

## Para Agregar Tema 3

1. Crear `/src/js/modules/renderers/tema3/`
2. Crear `Ejercicio1.js` ... `EjercicioN.js` con functions `tema3_ejercicioX()`
3. Importar todas en `index.js`
4. Agregar al Map
5. **ResultadoRenderer.js sigue igual** ✅

## Comparativa: Antes → Después

| Aspecto             | Antes                                        | Después            |
| ------------------- | -------------------------------------------- | ------------------ |
| Líneas en render()  | 8 (con fallback)                             | 4                  |
| tipoAMetodo()       | Complejo (camelCase)                         | ❌ Removido        |
| Legacys             | 7 métodos                                    | ❌ Removidos       |
| Helpers             | formatearLabel()                             | ❌ Removido        |
| Constructor         | 14 líneas manuales                           | 1 loop             |
| Para 400 ejercicios | 400 líneas                                   | 1 loop             |
| Transformación type | tema2_ejercicio1 → renderizarTema2Ejercicio1 | Sin transformación |
| **Líneas totales**  | **234**                                      | **41**             |
| **Reducción**       | —                                            | **82.5%**          |

## Por Qué Funciona

- El type del API mapea 1:1 con el nombre de la función
- No hay lógica intermedia, no hay transformaciones
- Constructor dinámico agrega cualquier nuevo ejercicio automáticamente
- Escalable a 400+ ejercicios sin modificar `ResultadoRenderer.js`
