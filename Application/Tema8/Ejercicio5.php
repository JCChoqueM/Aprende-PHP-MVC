<?php

namespace Application\Tema8;

use Application\AbstractEjercicio;

class Ejercicio5 extends AbstractEjercicio
{
    private const IVA = 0.21;

    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones: 'listar', 'alta', 'baja', 'modificar', 'entrada', 'venta', 'factura'
        $accion   = $_POST['accion'] ?? 'listar';
        $codigo   = $_POST['codigo'] ?? null;
        $cantidad = (int)($_POST['cantidad'] ?? 0);

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.articulos → [{codigo, descripcion, precioCompra, precioVenta, stock}]
        //
        // accion = 'alta' | 'baja' | 'modificar':
        //   data.respuesta.exito    → bool
        //   data.respuesta.mensaje  → mensaje de resultado (incluye error si código no existe/ya existe)
        //
        // accion = 'entrada':
        //   data.respuesta.exito       → bool
        //   data.respuesta.mensaje     → mensaje de resultado
        //   data.respuesta.stockActual → nuevo stock
        //
        // accion = 'venta':
        //   data.respuesta.lineas      → [{codigo, descripcion, cantidad, precioVenta, subtotal}]
        //   data.respuesta.baseImponible → total sin IVA
        //   data.respuesta.iva         → importe del IVA (21%)
        //   data.respuesta.total       → total con IVA
        //   data.respuesta.errores     → array de errores (stock insuficiente, código no existe)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
