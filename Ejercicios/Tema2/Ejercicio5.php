<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio5 extends EjercicioBase
{
    public static function procesar(): array
    {
        $data = $_POST;

        $errores = self::validar($data);

        if (!empty($errores)) {
            return [
                'error' => true,
                'mensaje' => $errores,
            ];
        }

        // Ya sabemos que existen y son numéricos
        $base   = (float) $data['campo1'];
        $altura = (float) $data['campo2'];

        $area = $base * $altura;

        return [
            'error' => false,
            'mensaje' => "El área del rectángulo es {$area} metros²"
        ];
    }

    public static function validar(array $data): array
    {
        $errores = [];

        if (!isset($data['campo1']) || !is_numeric($data['campo1']) || (float)$data['campo1'] <= 0) {
            $errores[] = 'Base inválida.';
        }

        if (!isset($data['campo2']) || !is_numeric($data['campo2']) || (float)$data['campo2'] <= 0) {
            $errores[] = 'Altura inválida.';
        }

        return $errores;
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el área de un rectángulo.';
    }
}
