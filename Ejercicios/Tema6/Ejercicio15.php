<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio15 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Muestra los números primos que hay entre 1 y 1000.';
    }
}
