// Gráficos simples en texto o bloques visuales
export function renderGraphic(lines) {
    if (!Array.isArray(lines)) return '';

    return `
        <pre class="resultado-grafico">
${lines.join('\n')}
        </pre>
    `;
}
// Ejercicios cubiertos

// Pirámides

// Pirámide hueca

// Diagramas ASCII

// Tableros simples