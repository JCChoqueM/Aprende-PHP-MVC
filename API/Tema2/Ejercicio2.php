<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
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
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $boliviano = 6.96;
        $dolar = $validacion['datos']['campo1'];
        $convertido = $dolar * $boliviano;

        // Retornar SOLO los datos calculados
        $respuesta = new Resultado_JSON('conversion', [
            'cantidad' => $dolar,
            'resultado' => round($convertido, 2)
        ]);

        return $respuesta->toArray();
    }
}
