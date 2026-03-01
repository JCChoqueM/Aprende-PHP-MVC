import { post } from './http/apiClient.js';
import { renderErrores } from './ui/renderErrores.js';

document
    .getElementById('btnResolver')
    .addEventListener('click', async (event) => {

        event.preventDefault();

        const url      = window.location.pathname;
        const apiUrl   = `/api${url}`;
        const formData = new FormData(document.querySelector('form'));

        try {
            const data = await post(apiUrl, formData);

            if (!data.success) {
                renderErrores(data.errors);
                return;
            }

            const modulo = await import(`./ui/renders${url}.js`);
            modulo.render(data);

        } catch (error) {
            console.error(error);
        }
    });