<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio19 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese el número a convertir',
            'dato2' => 'Base origen',
            'placeholder2' => 'Ingrese la base origen (decimal, binario, hexadecimal, octal)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Une y amplía los dos programas anteriores de tal forma que se permita convertir un número entre cualquiera de las siguientes bases: decimal, binario, hexadecimal y octal.';
    }
}
