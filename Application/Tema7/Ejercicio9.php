<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Amplía Ejercicio6 con CRUD de productos en cookies
        // Acciones posibles: 'listar', 'detalle', 'añadir', 'eliminar',
        //                    'altaProducto', 'bajaProducto', 'modificarProducto'
        $accion = $_POST['accion'] ?? 'listar';

        // El render esperará:
        // data.respuesta.vista      → 'listado' | 'detalle' | 'gestion'
        // data.respuesta.productos  → array de productos (desde cookies)
        // data.respuesta.detalle    → producto en detalle (solo en vista 'detalle')
        // data.respuesta.carrito    → array del carrito
        // data.respuesta.total      → total del carrito
        // data.respuesta.mensaje    → mensaje de confirmación de alta/baja/modificación

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
