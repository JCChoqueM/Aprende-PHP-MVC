<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio5 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'a',
            'placeholder1' => 'Ingrese el valor de a',
            'dato2' => 'b',
            'placeholder2' => 'Ingrese el valor de b',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).';
    }
}