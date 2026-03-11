<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio11 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Kilobytes (KB)',
            'placeholder1' => 'Ingrese los kilobytes a convertir',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un conversor de Kb a Mb.';
    }
}