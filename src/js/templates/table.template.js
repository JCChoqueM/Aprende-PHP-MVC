// Render genérico de tablas
export function renderTable(headers, rows) {
    if (!headers || !rows) return '';

    const thead = headers.map(h => `<th>${h}</th>`).join('');

    const tbody = rows.map(row =>
        `<tr>${row.map(cell => `<td>${cell}</td>`).join('')}</tr>`
    ).join('');

    return `
        <table class="resultado-tabla">
            <thead>
                <tr>${thead}</tr>
            </thead>
            <tbody>
                ${tbody}
            </tbody>
        </table>
    `;
}
// Ejercicios cubiertos

// Tablas de multiplicar

// Arrays con índice

// Número / cuadrado / cubo

// Matrices

// Barajas

// Diccionarios