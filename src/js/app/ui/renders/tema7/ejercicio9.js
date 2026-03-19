import { mostrarResultado } from '../../renderResult.js';

export function render(data) {
    const { vista, productos, detalle, carrito, total, mensaje } = data.respuesta;

    const carritoHTML = carrito.length === 0
        ? '<p>El carrito está vacío.</p>'
        : `<table border="1">
            <thead><tr><th>Producto</th><th>Precio</th><th>Uds.</th><th>Subtotal</th><th></th></tr></thead>
            <tbody>
                ${carrito.map(item => `
                    <tr>
                        <td>${item.nombre}</td>
                        <td>${item.precio} €</td>
                        <td>${item.cantidad}</td>
                        <td>${item.subtotal} €</td>
                        <td><button onclick="sendPrompt('accion=eliminar&productoId=${item.id}')">🗑</button></td>
                    </tr>
                `).join('')}
            </tbody>
            <tfoot><tr><td colspan="3"><b>Total</b></td><td colspan="2"><b>${total} €</b></td></tr></tfoot>
        </table>`;

    if (vista === 'gestion') {
        const filas = productos.map(p => `
            <tr>
                <td>${p.nombre}</td>
                <td>${p.precio} €</td>
                <td>
                    <button onclick="sendPrompt('accion=modificarProducto&productoId=${p.id}')">✏️ Editar</button>
                    <button onclick="sendPrompt('accion=bajaProducto&productoId=${p.id}')">🗑 Eliminar</button>
                </td>
            </tr>
        `).join('');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=listar')">← Volver al catálogo</button>
            <h3>Gestión de productos</h3>
            ${mensaje ? `<p style="color:#2ecc71;">${mensaje}</p>` : ''}
            <table border="1">
                <thead><tr><th>Nombre</th><th>Precio</th><th>Acciones</th></tr></thead>
                <tbody>${filas}</tbody>
            </table>
            <br>
            <button onclick="sendPrompt('accion=altaProducto')">+ Añadir producto</button>
        `);

    } else if (vista === 'detalle') {
        mostrarResultado(`
            <button onclick="sendPrompt('accion=listar')">← Volver</button>
            <h3>${detalle.nombre}</h3>
            <img src="${detalle.imagen}" alt="${detalle.nombre}" style="max-width:200px;"><br>
            <p>${detalle.descripcion}</p>
            <b>Precio: ${detalle.precio} €</b><br>
            <button onclick="sendPrompt('accion=añadir&productoId=${detalle.id}')">🛒 Añadir al carrito</button>
            <hr>
            <h3>Carrito</h3>${carritoHTML}
        `);

    } else {
        const catalogoHTML = productos.map(p => `
            <div style="border:1px solid #ccc; padding:10px; margin:5px; display:inline-block; width:150px;">
                <img src="${p.imagen}" alt="${p.nombre}" style="width:100%;"><br>
                <b>${p.nombre}</b><br>${p.precio} €<br>
                <button onclick="sendPrompt('accion=detalle&productoId=${p.id}')">🔍 Detalle</button>
                <button onclick="sendPrompt('accion=añadir&productoId=${p.id}')">🛒 Comprar</button>
            </div>
        `).join('');

        mostrarResultado(`
            <button onclick="sendPrompt('accion=gestion')">⚙️ Gestionar productos</button>
            <h3>Catálogo</h3>${catalogoHTML}
            <hr>
            <h3>Carrito</h3>${carritoHTML}
        `);
    }
}
