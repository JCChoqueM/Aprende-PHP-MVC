<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Gestiona el carrito de la compra con sesiones
        // Acciones posibles: 'listar', 'añadir', 'eliminar'
        $accion = $_POST['accion'] ?? 'listar';
        $productoId = $_POST['productoId'] ?? null;

        // El render esperará:
        // data.respuesta.productos → array de productos del catálogo [{id, nombre, precio, imagen, descripcion}]
        // data.respuesta.carrito   → array del carrito [{id, nombre, precio, cantidad, subtotal}]
        // data.respuesta.total     → total del carrito

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
