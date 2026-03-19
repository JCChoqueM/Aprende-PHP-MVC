<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio7 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.original → array original generado al azar
        // data.respuesta.ordenado → array con pares primero, impares después

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
