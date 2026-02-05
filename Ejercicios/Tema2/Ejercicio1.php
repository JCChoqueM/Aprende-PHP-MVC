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
        $producto = $multiplicando * $multiplicador;

        return [
            'mensaje' => "El producto de: $multiplicando x $multiplicador = $producto",
        ];
    }
    public static function enunciado(): string
    {
        return 'Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.';
    }
    public static function formulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'multiplicando',
            'placeholder1' => 'Ingrese el primer numero',
            'dato2' => 'multiplicador',
            'placeholder2' => 'ingrese el segundo numero',
        ];
    }
}
