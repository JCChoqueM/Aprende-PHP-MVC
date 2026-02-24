<?php

namespace API\Tema2;

use API\Resultado\Resultado_Texto;
use API\Validacion\ValidadorFactory;

class Ejercicio6
{
    public static function procesar(): array
    {
        // Usar el Factory para validación
        $validador = ValidadorFactory::numericoPositivo([
            'campo1' => 'Base',
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

        $base = $validacion['datos']['campo1'];
        $altura = $validacion['datos']['campo2'];
        $area = ($base * $altura) / 2;

        $resultado = new Resultado_Texto(
            'Área del Triángulo',
            "Base: {$base}m | Altura: {$altura}m | Área: {$area}m²"
        );

        return $resultado->toArray();
    }
}
