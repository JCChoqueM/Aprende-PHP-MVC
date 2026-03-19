<?php

namespace Ejercicios\Tema10;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Mejora el blog de tal forma que se permita la modificación de un artículo.';
    }
}
