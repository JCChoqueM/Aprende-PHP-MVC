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
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).';
    }
}
