export function renderErrores(errors) {
    const lista = Object.values(errors)
        .join('<br>');

    document.getElementById('phpResult').innerHTML = lista;
}