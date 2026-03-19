import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { accion, articulos, mensaje, exito, stockActual, lineas, baseImponible, iva, total, errores } = data.respuesta;

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
                </td>
            </tr>`).join('');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=alta')">+ Nuevo artículo</button>
            <button onclick="sendPrompt('accion=venta')">🧾 Nueva venta</button>
            <h3>GESTISIMAL - Almacén</h3>
            <table border="1">
                <thead><tr><th>Código</th><th>Descripción</th><th>P.Compra</th><th>P.Venta</th><th>Stock</th><th>Acciones</th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
        `);

    } else if (accion === 'venta') {
        const erroresHTML = errores && errores.length > 0
            ? `<ul style="color:#e74c3c">${errores.map(e => `<li>${e}</li>`).join('')}</ul>`
            : '';

        const filasFactura = lineas.map(l => `
            <tr>
                <td>${l.codigo}</td><td>${l.descripcion}</td>
                <td>${l.cantidad}</td><td>${l.precioVenta} €</td><td>${l.subtotal} €</td>
            </tr>`).join('');

        mostrarResultado(`
            ${erroresHTML}
            <h3>🧾 Factura</h3>
            <table border="1">
                <thead><tr><th>Código</th><th>Descripción</th><th>Cant.</th><th>P.Venta</th><th>Subtotal</th></tr></thead>
                <tbody>${filasFactura}</tbody>
                <tfoot>
                    <tr><td colspan="4">Base imponible</td><td>${baseImponible} €</td></tr>
                    <tr><td colspan="4">IVA (21%)</td><td>${iva} €</td></tr>
                    <tr><td colspan="4"><b>Total</b></td><td><b>${total} €</b></td></tr>
                </tfoot>
            </table>
            <br><button onclick="sendPrompt('accion=listar')">← Volver al listado</button>
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
