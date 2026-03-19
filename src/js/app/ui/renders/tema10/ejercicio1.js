import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion, articulos, mensaje } = data.respuesta;

    if (accion === 'listar' || !accion) {
        const articulosHTML = articulos.map(a => `
            <article style="border-bottom:1px solid #ddd; padding:16px 0; margin-bottom:8px;">
                <h2 style="margin:0 0 4px 0;">${a.titulo}</h2>
                <small style="color:#888;">📅 ${a.fecha}</small>
                <p style="margin:8px 0;">${a.contenido}</p>
                <button onclick="sendPrompt('accion=baja&id=${a.id}')">🗑 Eliminar</button>
            </article>
        `).join('');

        mostrarResultado(`
            <header style="background:#333; color:#fff; padding:16px; border-radius:8px 8px 0 0;">
                <h1 style="margin:0;">📝 Mi Blog</h1>
            </header>

            <main style="padding:12px;">
                <button onclick="sendPrompt('accion=alta')">+ Nuevo artículo</button>
                <hr>
                ${articulosHTML || '<p>No hay artículos todavía.</p>'}
            </main>

            <footer style="background:#eee; padding:10px; border-radius:0 0 8px 8px; text-align:center;">
                <small>Blog creado con PHP y BD</small>
            </footer>
        `);
    } else {
        mostrarResultado(`
            <p>${mensaje}</p>
            <button onclick="sendPrompt('accion=listar')">← Volver al blog</button>
        `);
    }
}
