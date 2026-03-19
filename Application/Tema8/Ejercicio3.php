<?php

namespace Application\Tema8;

use Application\AbstractEjercicio;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Igual que Tema7 Ejercicio6 pero los productos vienen de BD
        $accion    = $_POST['accion'] ?? 'listar';
        $productoId = $_POST['productoId'] ?? null;

        // El render esperará:
        // data.respuesta.vista      → 'listado' o 'detalle'
        // data.respuesta.productos  → array de productos desde BD [{id, nombre, precio, imagen, descripcion}]
        // data.respuesta.detalle    → producto en detalle (solo en vista 'detalle')
        // data.respuesta.carrito    → array del carrito (sesión)
        // data.respuesta.total      → total del carrito

        // Tu lógica aquí (SELECT sobre tabla productos en BD)
        // $result['respuesta'] = ...

        return $result;
    }
}
