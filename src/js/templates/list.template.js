// Renderiza listas simples de resultados numéricos o textos
// Usado por: múltiplos, primos, fibonacci, rangos, potencias, etc.
export function renderList(items) {
    if (!Array.isArray(items)) return '';

    const liItems = items.map(item => `<li>${item}</li>`).join('');

    return `
        <ul class="resultado-lista">
            ${liItems}
        </ul>
    `;
}

// Ejercicios cubiertos

// Múltiplos

// Primos

// Fibonacci

// Rangos

// Factorial desglosado

// Capicúas

// Conversión múltiple