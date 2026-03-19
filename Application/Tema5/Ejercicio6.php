<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio6 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $campos = ['Número 1', 'Número 2', 'Número 3', 'Número 4',
                   'Número 5', 'Número 6', 'Número 7', 'Número 8'];

        $result = self::validar($campos);
        if (!$result['success']) return $result;

        $numeros = array_values($result['input']);

        // El render esperará:
        // data.respuesta → array de [valor, esPar(bool)]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
