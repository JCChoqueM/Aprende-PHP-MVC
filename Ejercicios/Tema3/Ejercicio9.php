<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio9 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario3',
            'dato1' => 'a',
            'placeholder1' => 'Ingrese el valor de a',
            'dato2' => 'b',
            'placeholder2' => 'Ingrese el valor de b',
            'dato3' => 'c',
            'placeholder3' => 'Ingrese el valor de c',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax² + bx + c = 0).';
    }
}