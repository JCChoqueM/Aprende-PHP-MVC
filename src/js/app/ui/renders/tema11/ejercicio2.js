import { mostrarResultado } from '../../renderResult.js';

// Nota: en el proyecto real las vistas usan herencia de plantillas Twig:
// base.html.twig → cabecera + pie compartidos
// listado.html.twig, editar.html.twig → extienden base con {% extends 'base.html.twig' %}

// Función auxiliar que simula la plantilla base (herencia Twig)
function plantillaBase(contenido) {
    return `
        <header style="background:#2c3e50; color:#fff; padding:16px; border-radius:8px 8px 0 0;">
            <h1 style="margin:0;">📝 Blog (Twig + Herencia)</h1>
            <nav style="margin-top:8px;">
                <button onclick="sendPrompt('accion=listar')" style="background:transparent; color:#fff; border:1px solid #fff; border-radius:4px; padding:4px 10px; cursor:pointer;">
                    🏠 Inicio
                </button>
                <button onclick="sendPrompt('accion=alta')" style="background:transparent; color:#fff; border:1px solid #fff; border-radius:4px; padding:4px 10px; cursor:pointer; margin-left:6px;">
                    + Nuevo artículo
                </button>
            </nav>
        </header>
        <main style="padding:16px;">
            ${contenido}
        </main>
        <footer style="background:#ecf0f1; padding:10px; border-radius:0 0 8px 8px; text-align:center;">
            <small>Blog con herencia de plantillas Twig · {% block footer %}{% endblock %}</small>
        </footer>
    `;
}

export function render(data) {
    const { accion, articulos, articulo, mensaje } = data.respuesta;

    if (accion === 'listar' || !accion) {
        const articulosHTML = articulos.map(a => `
            <article style="border-bottom:1px solid #ddd; padding:16px 0;">
                <h2 style="margin:0 0 4px 0;">${a.titulo}</h2>
                <small style="color:#888;">📅 ${a.fecha}</small>
                <p style="margin:8px 0;">${a.contenido}</p>
                <button onclick="sendPrompt('accion=editar&id=${a.id}')">✏️ Editar</button>
                <button onclick="sendPrompt('accion=baja&id=${a.id}')">🗑 Eliminar</button>
            </article>
        `).join('');

        mostrarResultado(plantillaBase(
            articulosHTML || '<p>No hay artículos todavía.</p>'
        ));

    } else if (accion === 'editar') {
        mostrarResultado(plantillaBase(`
            <h3>✏️ Editar artículo</h3>
            <p><b>Título:</b> ${articulo.titulo}</p>
            <p><b>Contenido:</b> ${articulo.contenido}</p>
            <button onclick="sendPrompt('accion=modificar&id=${articulo.id}')">💾 Guardar</button>
            <button onclick="sendPrompt('accion=listar')">❌ Cancelar</button>
        `));

    } else {
        mostrarResultado(plantillaBase(`
            <p>${mensaje}</p>
            <button onclick="sendPrompt('accion=listar')">← Volver al blog</button>
        `));
    }
}
