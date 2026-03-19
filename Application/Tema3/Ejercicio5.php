<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['a', 'b']);
        if (!$result['success']) return $result;

        ['a' => $a, 'b' => $b] = $result['input'];

        // El render esperará:
        // data.input.a       → coeficiente a
        // data.input.b       → coeficiente b
        // data.respuesta     → solución x o mensaje de error si a = 0

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}