<?php

namespace API\Tema2;

use API\Resultado\Resultado_Scalar;
use API\Validacion\ValidadorFactory;

class Ejercicio9
{
    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Radio',
            'campo2' => 'Altura'
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
        $altura = $validacion['datos']['campo2'];
        $pi = 3.14159265359;
        $volumen = round($pi * $radio * $radio * $altura, 2);

        $resultado = new Resultado_Scalar(
            'Volumen del Cilindro',
            $volumen . " unidades³"
        );

        return $resultado->toArray();
    }
}
