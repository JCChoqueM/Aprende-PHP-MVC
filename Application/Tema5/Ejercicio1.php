<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array de 20 filas con [numero, cuadrado, cubo]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
