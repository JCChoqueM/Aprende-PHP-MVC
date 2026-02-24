<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
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
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $dolar = 6.96;
        $boliviano = $validacion['datos']['campo1'];
        $convertido = round($boliviano / $dolar, 2);

        // Retornar SOLO datos calculados
        $resultado = new Resultado_JSON('conversion_bol', [
            'cantidad' => $boliviano,
            'resultado' => $convertido
        ]);

        return $resultado->toArray();
    }
}
