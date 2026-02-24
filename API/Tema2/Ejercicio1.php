<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
use API\Validacion\ValidadorFactory;

class Ejercicio1
{

    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Multiplicando',
            'campo2' => 'Multiplicador'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $a = $validacion['datos']['campo1'];
        $b = $validacion['datos']['campo2'];

        // Retornar SOLO los datos necesarios
        $resultado = new Resultado_JSON(
            'tema2_ejercicio1',
            ['a' => $a, 'b' => $b],
            ['resultado' => $a * $b]
        );

        return $resultado->toArray();
    }
}
