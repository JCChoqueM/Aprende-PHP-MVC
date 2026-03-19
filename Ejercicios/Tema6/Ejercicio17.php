<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio17 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Binario',
            'placeholder1' => 'Ingrese un número binario (ej: 1010)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que pase de binario a decimal.';
    }
}
