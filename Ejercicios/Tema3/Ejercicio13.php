<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio13 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario3',
            'dato1' => 'Número 1',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Número 2',
            'placeholder2' => 'Ingrese el segundo número',
            'dato3' => 'Número 3',
            'placeholder3' => 'Ingrese el tercer número',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que ordene tres números enteros introducidos por teclado.';
    }
}