<?php

namespace API\Tema2;

use API\Resultado\Resultado_Scalar;
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
            return [
                'type' => 'evaluation',
                'data' => [
                    'ok' => false,
                    'message' => implode('<br>', $validacion['errores'])
                ]
            ];
        }

        $radio = $validacion['datos']['campo1'];
        $pi = 3.14159265359;
        $area = round($pi * $radio * $radio, 2);

        $resultado = new Resultado_Scalar(
            'Área del Círculo',
            $area . " m²"
        );

        return $resultado->toArray();
    }
}
