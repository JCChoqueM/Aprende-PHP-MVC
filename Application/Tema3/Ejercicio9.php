<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['a', 'b', 'c']);
        if (!$result['success']) return $result;

        ['a' => $a, 'b' => $b, 'c' => $c] = $result['input'];

        // El render esperará:
        // data.input.a           → coeficiente a
        // data.input.b           → coeficiente b
        // data.input.c           → coeficiente c
        // data.respuesta         → soluciones x1, x2 o mensaje (sin solución, solución doble)

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}