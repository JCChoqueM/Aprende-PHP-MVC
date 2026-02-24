<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
use API\Validacion\ValidadorFactory;

class Ejercicio4
{
    public static function procesar(): array
    {
        // Validar entrada - permite números negativos (para resta, división)
        $validador = ValidadorFactory::numericoNoNegativo([
            'campo1' => 'Número A',
            'campo2' => 'Número B'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $a = $validacion['datos']['campo1'];
        $b = $validacion['datos']['campo2'];

        // Retornar SOLO los resultados calculados
        $resultado = new Resultado_JSON('operaciones', [
            'a' => $a,
            'b' => $b,
            'suma' => $a + $b,
            'resta' => $a - $b,
            'multiplicacion' => $a * $b,
            'division' => $b == 0 ? null : round($a / $b, 4)
        ]);

        return $resultado->toArray();
    }
}
