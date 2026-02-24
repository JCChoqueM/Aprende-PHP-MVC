<?php

namespace API\Tema2;

use API\Resultado\Resultado_Texto;
use API\Validacion\ValidadorFactory;

class Ejercicio2
{

    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Dólares'
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

        $boliviano = 6.96;
        $dolar = $validacion['datos']['campo1'];
        $resultado = $dolar * $boliviano;

        $respuesta = new Resultado_Texto(
            'Conversión de dólares a bolivianos',
            $dolar . " dólares = " . $resultado . " bolivianos"
        );

        return $respuesta->toArray();
    }
}
