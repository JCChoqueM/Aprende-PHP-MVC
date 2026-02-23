<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

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
            'dato1' => 'Multiplicando',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Multiplicador',
            'placeholder2' => 'Ingrese el segundo número',
        ];
    }
}
