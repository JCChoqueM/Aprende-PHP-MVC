<?php

namespace Application\Tema9;

use Application\AbstractEjercicio;

class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Zona', 'Cantidad']);
        if (!$result['success']) return $result;

        ['Zona' => $zona, 'Cantidad' => $cantidad] = $result['input'];

        // Usa sesiones para mantener el stock de cada zona
        // Stock inicial: principal=1000, compraventa=200, vip=25

        // El render esperará:
        // data.input.Zona                 → zona seleccionada
        // data.input.Cantidad             → entradas solicitadas
        // data.respuesta.exito            → bool
        // data.respuesta.mensaje          → 'Venta realizada' o 'No hay suficientes entradas'
        // data.respuesta.zonas            → [{nombre, disponibles, capacidad}]
        //   zonas[0] = { nombre: 'Principal',    disponibles: X, capacidad: 1000 }
        //   zonas[1] = { nombre: 'Compra-venta', disponibles: X, capacidad: 200  }
        //   zonas[2] = { nombre: 'VIP',          disponibles: X, capacidad: 25   }

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
