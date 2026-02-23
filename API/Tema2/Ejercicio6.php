<?php
// 12_Ejercicio6.php (MODIFICADO)
// Tema 2/Ejercicios/ejercicio6 área de un triangulo/Ejercicio6.php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;
use Ejercicios\Validacion\ValidadorFactory;

class Ejercicio6 extends EjercicioBase
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

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del triángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del triángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el área de un triángulo.';
    }
}
