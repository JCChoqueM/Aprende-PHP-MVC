<?php

namespace Ejercicios\Tema2;

use MVC\Router;
use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;
use Ejercicios\Contracts\EjercicioInterface;

class Ejercicio1 extends EjercicioBase
{
    public static function enunciado(): string
    {
        return 'Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.';
    }
    protected static function obtenerConfiguracionFormulario(): array
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
    public static function procesar(): array
    {
        $multiplicando = $_POST['campo1'] ?? 0;
        $multiplicador = $_POST['campo2'] ?? 0;
        $producto = $multiplicando * $multiplicador;
        $contenido = "El producto de: $multiplicando x $multiplicador = $producto";
        return [
            'mensaje' => $contenido,
        ];
    }
}
