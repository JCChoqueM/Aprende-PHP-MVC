<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio6 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con los números del 320 al 160 de 20 en 20

        // Tu lógica aquí (usando do-while)
        // $result['respuesta'] = ...

        return $result;
    }
}
