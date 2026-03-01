<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
use API\Validacion\ValidadorFactory;

class Ejercicio5
{
    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Base',
            'campo2' => 'Altura'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $base = $validacion['datos']['campo1'];
        $altura = $validacion['datos']['campo2'];
        $area = $base * $altura;

        // Retornar SOLO datos calculados
        $resultado = new Resultado_JSON(
            'tema2_ejercicio5',
            ['base' => $base, 'altura' => $altura],
            ['area' => $area]
        );

        return $resultado->toArray();
    }
}
