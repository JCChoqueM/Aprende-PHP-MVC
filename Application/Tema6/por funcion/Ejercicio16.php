<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio16 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con todos los capicúas entre 1 y 99999

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
