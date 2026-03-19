<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio7 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario3',
            'dato1' => 'Nota 1',
            'placeholder1' => 'Ingrese la primera nota',
            'dato2' => 'Nota 2',
            'placeholder2' => 'Ingrese la segunda nota',
            'dato3' => 'Nota 3',
            'placeholder3' => 'Ingrese la tercera nota',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que calcule la media de tres notas.';
    }
}