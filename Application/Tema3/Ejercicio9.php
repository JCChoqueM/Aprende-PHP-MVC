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

        // Tu lógica aqui
        $delta = $b * $b - 4 * $a * $c;

if ($a == 0) {
    $result['respuesta'] = 'No es una ecuación cuadrática,a no puede ser 0';
    return $result;
}

if ($delta < 0) {
    $result['respuesta'] = 'Sin solución';
} elseif ($delta == 0) {
    $x = round(-$b / (2 * $a), 2);
    $result['respuesta'] = "Solución doble: $x";
} else {
    $x1 = round((-$b + sqrt($delta)) / (2 * $a), 2);
    $x2 = round((-$b - sqrt($delta)) / (2 * $a), 2);
    $result['respuesta'] = [$x1, $x2];
}

return $result;
    }
}