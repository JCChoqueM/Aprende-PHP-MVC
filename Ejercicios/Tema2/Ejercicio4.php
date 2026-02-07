<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    public static function procesar(): array
    {
        // 1. Validar entrada
        $validacion = self::validarEntrada();
        if (!$validacion['valido']) {
            http_response_code(400);
            return [
                'error' => true,
                'mensaje' => $validacion['mensaje']
            ];
        }

        $a = $validacion['datos']['a'];
        $b = $validacion['datos']['b'];

        // 2. Generar mensajes listos para mostrar
        $mensajes = [];
        $mensajes[] = "La suma de {$a} más {$b} es: " . ($a + $b);
        $mensajes[] = "La resta de {$a} menos {$b} es: " . ($a - $b);
        $mensajes[] = "La multiplicación de {$a} por {$b} es: " . ($a * $b);
        
        if ($b == 0) {
            $mensajes[] = "La división entre 0 no es posible";
        } else {
            $mensajes[] = "La división de {$a} entre {$b} es: " . ($a / $b);
        }

        // 3. Retornar mensajes listos
        http_response_code(200);
        return [
            'error' => false,
            'mensaje' => implode('<br><br>', $mensajes)
        ];
    }

    private static function validarEntrada(): array
    {
        if (!isset($_POST['campo1']) || !isset($_POST['campo2'])) {
            return [
                'valido' => false,
                'mensaje' => 'Los campos campo1 y campo2 son requeridos'
            ];
        }

        if (trim($_POST['campo1']) === '' || trim($_POST['campo2']) === '') {
            return [
                'valido' => false,
                'mensaje' => 'Los campos no pueden estar vacíos'
            ];
        }

        if (!is_numeric($_POST['campo1']) || !is_numeric($_POST['campo2'])) {
            return [
                'valido' => false,
                'mensaje' => 'Los valores deben ser numéricos'
            ];
        }

        return [
            'valido' => true,
            'datos' => [
                'a' => floatval($_POST['campo1']),
                'b' => floatval($_POST['campo2'])
            ]
        ];
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Primer Número',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Segundo Número',
            'placeholder2' => 'Ingrese el segundo número',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.';
    }
}