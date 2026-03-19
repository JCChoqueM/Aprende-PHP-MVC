<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio18 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Número 1',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Número 2',
            'placeholder2' => 'Ingrese el segundo número',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7.';
    }
}
