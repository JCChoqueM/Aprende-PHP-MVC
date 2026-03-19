<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio14 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Columna', 'Fila']);
        if (!$result['success']) return $result;

        ['Columna' => $columna, 'Fila' => $fila] = $result['input'];

        // El render esperará:
        // data.input.Columna       → columna (a-h)
        // data.input.Fila          → fila (1-8)
        // data.respuesta           → array 8x8 con [casilla, estado] donde estado es 'alfil'|'movimiento'|'vacia'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
