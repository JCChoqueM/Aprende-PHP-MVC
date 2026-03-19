<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio22 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con todos los números primos entre 2 y 100

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
