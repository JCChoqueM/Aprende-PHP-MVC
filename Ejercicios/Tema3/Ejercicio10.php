<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio10 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Día',
            'placeholder1' => 'Ingrese el día de nacimiento',
            'dato2' => 'Mes',
            'placeholder2' => 'Ingrese el mes de nacimiento (1-12)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.';
    }
}