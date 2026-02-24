<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
use API\Validacion\ValidadorFactory;

class Ejercicio11
{
    public static function procesar(): array
    {
        // Validar entrada - radio debe ser positivo
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Radio del Círculo'
        ]);

        $validacion = $validador->validar($_POST);

        if (!$validacion['valido']) {
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $radio = $validacion['datos']['campo1'];
        $pi = 3.14159265359;
        $area = round($pi * $radio * $radio, 2);

        // Retornar SOLO datos calculados
        $resultado = new Resultado_JSON(
            'tema2_ejercicio11',
            ['radio' => $radio],
            ['area' => $area]
        );

        return $resultado->toArray();
    }
}
