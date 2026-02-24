<?php

namespace API\Tema2;

use API\Resultado\Resultado_Texto;
use API\Validacion\ValidadorFactory;

class Ejercicio3
{
    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Bolivianos'
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

        $dolar = 6.96;
        $boliviano = $validacion['datos']['campo1'];
        $convertido = round($boliviano / $dolar, 2);

        $resultado = new Resultado_Texto(
            'Conversión de bolivianos a dólares',
            $boliviano . " bolivianos = " . $convertido . " dólares"
        );

        return $resultado->toArray();
    }
}
