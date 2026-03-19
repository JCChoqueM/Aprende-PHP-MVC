import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion, clientes, mensaje } = data.respuesta;

    if (accion === 'listar' || !accion) {
        const filas = clientes.map(c => `
            <tr>
                <td>${c.id}</td>
                <td>${c.nombre}</td>
                <td>${c.dni}</td>
                <td>${c.direccion}</td>
                <td>
                    <button onclick="sendPrompt('accion=modificar&id=${c.id}')">✏️ Editar</button>
                    <button onclick="sendPrompt('accion=baja&id=${c.id}')">🗑 Eliminar</button>
                </td>
            </tr>
        `).join('');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=alta')">+ Nuevo cliente</button>
            <h3>Listado de clientes</h3>
            <table border="1">
                <thead><tr><th>ID</th><th>Nombre</th><th>DNI</th><th>Dirección</th><th>Acciones</th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
        `);
    } else {
        mostrarResultado(`<p>${mensaje}</p>
            <button onclick="sendPrompt('accion=listar')">← Volver al listado</button>`);
    }
}
