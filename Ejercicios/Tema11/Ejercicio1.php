<?php

namespace Ejercicios\Tema11;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Actualiza el blog realizado anteriormente de tal forma que todas las vistas estén implementadas en Twig.';
    }
}
