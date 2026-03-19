import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion, articulos, mensaje, exito, stockActual } = data.respuesta;

    if (accion === 'listar' || !accion) {
        const filas = articulos.map(a => `
            <tr>
                <td>${a.codigo}</td><td>${a.descripcion}</td>
                <td>${a.precioCompra} €</td><td>${a.precioVenta} €</td>
                <td>${a.stock}</td>
                <td>
                    <button onclick="sendPrompt('accion=modificar&codigo=${a.codigo}')">✏️</button>
                    <button onclick="sendPrompt('accion=baja&codigo=${a.codigo}')">🗑</button>
                    <button onclick="sendPrompt('accion=entrada&codigo=${a.codigo}')">📥</button>
                    <button onclick="sendPrompt('accion=salida&codigo=${a.codigo}')">📤</button>
                </td>
            </tr>`).join('');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=alta')">+ Nuevo artículo</button>
            <h3>GESTISIMAL - Almacén</h3>
            <table border="1">
                <thead><tr><th>Código</th><th>Descripción</th><th>P.Compra</th><th>P.Venta</th><th>Stock</th><th>Acciones</th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
        `);
    } else {
        const color = exito === false ? '#e74c3c' : '#2ecc71';
        mostrarResultado(`
            <p style="color:${color}">${mensaje}</p>
            ${stockActual !== undefined ? `<p>Stock actual: <b>${stockActual}</b></p>` : ''}
            <button onclick="sendPrompt('accion=listar')">← Volver al listado</button>
        `);
    }
}
