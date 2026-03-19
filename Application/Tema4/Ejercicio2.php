<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con los múltiplos de 5 del 0 al 100

        // Tu lógica aquí (usando while)
        // $result['respuesta'] = ...

        return $result;
    }
}
