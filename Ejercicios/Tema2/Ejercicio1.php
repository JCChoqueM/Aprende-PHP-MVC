<?php

namespace Ejercicios\Tema2;

use MVC\Router;
use Ejercicios\Resultado\ResultadoTexto;
use Ejercicios\Contracts\EjercicioInterface;

class Ejercicio1
{
    public static function procesar(Router $router): array
    {
        $multiplicando = $_POST['campo1'] ?? 0;
        $multiplicador = $_POST['campo2'] ?? 0;

        return [
            'mensaje' => $multiplicando * $multiplicador
        ];
    }
    public static function enunciado(): string
    {
        return 'Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.';
    }
    public static function formulario(): array
    {
        return [
            'formulario' => true,
            'nombreFormulario' => 'formulario',
            'dato1' => 'multiplicando',
            'placeholder1' => 'Ingrese el primer numero',
            'dato2' => 'multiplicador',
            'placeholder2' => 'ingrese el segundo numero',
        ];
    }
}
