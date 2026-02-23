<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio18 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
negativo. Se permiten números de hasta 5 dígitos.';
    }
}
