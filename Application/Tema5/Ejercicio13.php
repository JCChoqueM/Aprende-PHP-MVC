<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio13 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.matriz   → array bidimensional 6x9
        // data.respuesta.minimo   → valor mínimo
        // data.respuesta.filMin   → fila del mínimo
        // data.respuesta.colMin   → columna del mínimo

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
