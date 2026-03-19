<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $campos = ['Número 1', 'Número 2', 'Número 3', 'Número 4', 'Número 5',
                   'Número 6', 'Número 7', 'Número 8', 'Número 9', 'Número 10',
                   'Posición inicial', 'Posición final'];

        $result = self::validar($campos);
        if (!$result['success']) return $result;

        ['Posición inicial' => $inicial, 'Posición final' => $final] = $result['input'];

        // El render esperará:
        // data.respuesta.original → array original con índices
        // data.respuesta.rotado   → array resultado tras la rotación

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
