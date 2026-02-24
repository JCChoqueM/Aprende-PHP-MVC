<?php

namespace API\Tema2;

use API\Resultado\Resultado_Scalar;
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
            return [
                'type' => 'evaluation',
                'data' => [
                    'ok' => false,
                    'message' => implode('<br>', $validacion['errores'])
                ]
            ];
        }

        $lado = $validacion['datos']['campo1'];
        $area = $lado * $lado;

        $resultado = new Resultado_Scalar(
            'Área del Cuadrado',
            $area . " m²"
        );

        return $resultado->toArray();
    }
}
