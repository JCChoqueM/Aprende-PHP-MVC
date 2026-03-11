<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio10 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Megabytes (MB)',
            'placeholder1' => 'Ingrese los megabytes a convertir',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un conversor de Mb a Kb.';
    }
}