<?php

namespace API\Tema2;

use API\Resultado\Resultado_Scalar;
use API\Validacion\ValidadorFactory;

class Ejercicio1
{

    public static function procesar(): array
    {
        // Validar entrada
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'multiplicando',
            'campo2' => 'multiplicador'
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

        $a = $validacion['datos']['campo1'];
        $b = $validacion['datos']['campo2'];

        $resultado = new Resultado_Scalar(
            'Resultado de la multiplicación',
            $a * $b
        );

        return $resultado->toArray();
    }
}
