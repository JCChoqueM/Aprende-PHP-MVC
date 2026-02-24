<?php

namespace API\Tema2;

use API\Resultado\Resultado_Texto;
use API\Validacion\ValidadorFactory;

class Ejercicio4
{
    public static function procesar(): array
    {
        // Validar entrada - permite números negativos (para resta, división)
        $validador = ValidadorFactory::numericoNoNegativo([
            'campo1' => 'Número A',
            'campo2' => 'Número B'
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

        // Generar resultados
        $mensajes = [];
        $mensajes[] = "Suma: {$a} + {$b} = " . ($a + $b);
        $mensajes[] = "Resta: {$a} - {$b} = " . ($a - $b);
        $mensajes[] = "Multiplicación: {$a} × {$b} = " . ($a * $b);

        if ($b == 0) {
            $mensajes[] = "División: No se puede dividir entre 0";
        } else {
            $mensajes[] = "División: {$a} ÷ {$b} = " . ($a / $b);
        }

        $resultado = new Resultado_Texto(
            'Operaciones Matemáticas',
            implode('<br><br>', $mensajes)
        );

        return $resultado->toArray();
    }
}
