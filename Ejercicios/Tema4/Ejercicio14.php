<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio14 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base',
            'placeholder1' => 'Ingrese la base',
            'dato2' => 'Exponente',
            'placeholder2' => 'Ingrese el exponente (entero positivo)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que pida una base y un exponente (entero positivo) y que calcule la potencia.';
    }
}
