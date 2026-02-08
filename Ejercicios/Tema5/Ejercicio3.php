<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    public static function procesar(): array
    {
        // Validar entrada
        $validacion = self::validarEntrada();
        if (!$validacion['valido']) {
            http_response_code(400);
            return [
                'error' => true,
                'mensaje' => implode('<br>', $validacion['errores'])
            ];
        }

        $base = $validacion['datos']['base'];
        $altura = $validacion['datos']['altura'];

        // Calcular área
        $area = $base * $altura;

        // Retornar mensaje formateado
        http_response_code(200);
        return [
            'error' => false,
            'mensaje' => "El área del rectángulo con base {$base}m y altura {$altura}m es: {$area}m²"
        ];
    }

    private static function validarEntrada(): array
    {
        $errores = [];

        // Validar que existan los campos
        if (!isset($_POST['campo1']) || !isset($_POST['campo2'])) {
            $errores[] = 'Los campos base y altura son requeridos';
            return ['valido' => false, 'errores' => $errores];
        }

        // Validar que no estén vacíos
        if (trim($_POST['campo1']) === '' || trim($_POST['campo2']) === '') {
            $errores[] = 'Los campos no pueden estar vacíos';
            return ['valido' => false, 'errores' => $errores];
        }

        // Validar que sean numéricos
        if (!is_numeric($_POST['campo1'])) {
            $errores[] = 'La base debe ser un valor numérico';
        }
        if (!is_numeric($_POST['campo2'])) {
            $errores[] = 'La altura debe ser un valor numérico';
        }

        if (!empty($errores)) {
            return ['valido' => false, 'errores' => $errores];
        }

        $base = floatval($_POST['campo1']);
        $altura = floatval($_POST['campo2']);

        // Validar que sean positivos
        if ($base <= 0) {
            $errores[] = 'La base debe ser mayor que 0';
        }
        if ($altura <= 0) {
            $errores[] = 'La altura debe ser mayor que 0';
        }

        if (!empty($errores)) {
            return ['valido' => false, 'errores' => $errores];
        }

        return [
            'valido' => true,
            'datos' => [
                'base' => $base,
                'altura' => $altura
            ]
        ];
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.';
    }
}