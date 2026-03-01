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

        // Retornar operaciones como array de {formula, valor}
        $operaciones = [
            ['formula' => "$a + $b = " . ($a + $b)],
            ['formula' => "$a - $b = " . ($a - $b)],
            ['formula' => "$a × $b = " . ($a * $b)],
            ['formula' => $b == 0 ? "$a ÷ $b = No definida" : "$a ÷ $b = " . round($a / $b, 4)]
        ];

        $resultado = new Resultado_JSON(
            'tema2_ejercicio4',
            ['a' => $a, 'b' => $b],
            $operaciones
        );

        return $resultado->toArray();
    }
}
