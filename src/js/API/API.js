import { renderErrores } from './renderErrores.js';

document.getElementById('btnResolver').addEventListener('click', async function (event) {
    event.preventDefault();

    const url      = window.location.pathname;
    const apiUrl   = `/api${url}`;
    const formData = new FormData(document.querySelector('form'));

    const response = await fetch(apiUrl, { method: 'POST', body: formData });
    const data     = await response.json();

    if (!data.success) {
        renderErrores(data.errors);
        return;
    }

    const modulo = await import(`./renders${url}.js`);
    modulo.render(data);
});