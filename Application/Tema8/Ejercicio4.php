<?php

namespace Application\Tema8;

use Application\AbstractEjercicio;

class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones: 'listar', 'alta', 'baja', 'modificar', 'entrada', 'salida'
        $accion     = $_POST['accion'] ?? 'listar';
        $codigo     = $_POST['codigo'] ?? null;
        $cantidad   = (int)($_POST['cantidad'] ?? 0);

        // El render esperará según acción:
        // accion = 'listar':
        //   data.respuesta.articulos → [{codigo, descripcion, precioCompra, precioVenta, stock}]
        //
        // accion = 'alta' | 'baja' | 'modificar':
        //   data.respuesta.mensaje   → mensaje de resultado
        //
        // accion = 'entrada':
        //   data.respuesta.mensaje   → 'Stock incrementado correctamente'
        //   data.respuesta.stockActual → nuevo stock
        //
        // accion = 'salida':
        //   data.respuesta.exito     → bool (false si no hay suficiente stock)
        //   data.respuesta.mensaje   → 'Stock decrementado' o 'Stock insuficiente'
        //   data.respuesta.stockActual → stock actual

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
