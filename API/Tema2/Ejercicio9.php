<?php

namespace API\Tema2;

use API\Resultado\Resultado_JSON;
use API\Resultado\Resultado_Error;
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
            $resultado = new Resultado_Error($validacion['errores']);
            return $resultado->toArray();
        }

        $radio = $validacion['datos']['campo1'];
        $altura = $validacion['datos']['campo2'];
        $pi = 3.14159265359;
        $volumen = round($pi * $radio * $radio * $altura, 2);

        // Retornar SOLO datos calculados
        $resultado = new Resultado_JSON('volumen', [
            'radio' => $radio,
            'altura' => $altura,
            'volumen' => $volumen
        ]);

        return $resultado->toArray();
    }
}
