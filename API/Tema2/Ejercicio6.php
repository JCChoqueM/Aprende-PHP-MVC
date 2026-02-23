<?php
// 12_Ejercicio6.php (MODIFICADO)
// Tema 2/Ejercicios/ejercicio6 área de un triangulo/Ejercicio6.php

namespace API\Tema2;


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
            http_response_code(400);
            return [
                'error' => true,
                'mensaje' => implode('<br>', $validacion['errores'])
            ];
        }

        $base = $validacion['datos']['campo1'];
        $altura = $validacion['datos']['campo2'];
        $area = ($base * $altura) / 2;

        http_response_code(200);
        return [
            'error' => false,
            'mensaje' => "El área del Triángulo con base {$base}m y altura {$altura}m es: {$area}m²"
        ];
    }
}
