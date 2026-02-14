// Evaluaciones lógicas: aprobado, primo, acceso, etc.
export function renderEvaluation(ok, message) {
    const clase = ok ? 'ok' : 'fail';

    return `
        <div class="resultado-evaluacion ${clase}">
            ${message}
        </div>
    `;
}
// Ejercicios cubiertos

// Caja fuerte

// Primo / no primo

// Par / impar

// Horóscopo

// Infidelidad

// Aprobado / suspendido