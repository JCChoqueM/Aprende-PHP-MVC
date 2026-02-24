// Renderizador para errores de validación
export function error(respuesta) {
    const { errores } = respuesta;
    if (!errores || !errores.length) return '';
    const lista = errores.map(e => `<li>${e}</li>`).join('');
    return `
        <div class="resultado-error">
            <h4>Errores de validación:</h4>
            <ul class="error-list">${lista}</ul>
        </div>
    `;
}
