<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $campos = ['Número 1', 'Número 2', 'Número 3', 'Número 4', 'Número 5',
                   'Número 6', 'Número 7', 'Número 8', 'Número 9', 'Número 10',
                   'Número 11', 'Número 12', 'Número 13', 'Número 14', 'Número 15'];

        $result = self::validar($campos);
        if (!$result['success']) return $result;

        $numeros = array_values($result['input']);

        // El render esperará:
        // data.respuesta.original  → array original
        // data.respuesta.rotado    → array rotado (el último pasa al principio)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
