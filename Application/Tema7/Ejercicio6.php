<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio6 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Amplía Ejercicio5 con vista de detalle
        // Acciones posibles: 'listar', 'detalle', 'añadir', 'eliminar'
        $accion = $_POST['accion'] ?? 'listar';
        $productoId = $_POST['productoId'] ?? null;

        // El render esperará:
        // data.respuesta.vista      → 'listado' o 'detalle'
        // data.respuesta.productos  → array de productos del catálogo
        // data.respuesta.detalle    → producto en detalle (solo en vista 'detalle')
        // data.respuesta.carrito    → array del carrito
        // data.respuesta.total      → total del carrito

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
