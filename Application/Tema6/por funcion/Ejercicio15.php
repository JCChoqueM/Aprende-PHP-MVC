<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio15 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con todos los primos entre 1 y 1000

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
