import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion, clientes, paginaActual, totalPaginas, mensaje, exito, cliente } = data.respuesta;

    if (accion === 'listar' || !accion) {
        const filas = clientes.map(c => `
            <tr>
                <td>${c.id}</td><td>${c.nombre}</td><td>${c.dni}</td><td>${c.direccion}</td>
                <td>
                    <button onclick="sendPrompt('accion=modificar&id=${c.id}')">✏️</button>
                    <button onclick="sendPrompt('accion=confirmarBaja&id=${c.id}')">🗑</button>
                </td>
            </tr>
        `).join('');

        const paginacion = Array.from({length: totalPaginas}, (_, i) =>
            `<button onclick="sendPrompt('accion=listar&pagina=${i+1}')"
                style="font-weight:${paginaActual === i+1 ? 'bold' : 'normal'}">${i+1}</button>`
        ).join(' ');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=alta')">+ Nuevo cliente</button>
            <h3>Clientes (página ${paginaActual}/${totalPaginas})</h3>
            <table border="1">
                <thead><tr><th>ID</th><th>Nombre</th><th>DNI</th><th>Dirección</th><th>Acciones</th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
            <br>Páginas: ${paginacion}
        `);

    } else if (accion === 'confirmarBaja') {
        mostrarResultado(`
            <p>¿Seguro que quieres eliminar a <b>${cliente.nombre}</b> (DNI: ${cliente.dni})?</p>
            <button onclick="sendPrompt('accion=baja&id=${cliente.id}')">✅ Confirmar</button>
            <button onclick="sendPrompt('accion=listar')">❌ Cancelar</button>
        `);

    } else {
        const color = exito === false ? '#e74c3c' : '#2ecc71';
        mostrarResultado(`
            <p style="color:${color}">${mensaje}</p>
            <button onclick="sendPrompt('accion=listar')">← Volver al listado</button>
        `);
    }
}
