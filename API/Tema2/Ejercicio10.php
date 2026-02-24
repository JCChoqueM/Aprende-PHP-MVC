<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
use API\Validacion\ValidadorFactory;

class Ejercicio10
{
    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Lado del Cuadrado'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $lado = $validacion['datos']['campo1'];
        $area = $lado * $lado;

        // Retornar SOLO datos calculados
        $resultado = new Resultado_JSON(
            'tema2_ejercicio10',
            ['lado' => $lado],
            ['area' => $area]
        );

        return $resultado->toArray();
    }
}
