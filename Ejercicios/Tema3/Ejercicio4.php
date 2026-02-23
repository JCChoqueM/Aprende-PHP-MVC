<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
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
        return 'Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.';
    }
}
