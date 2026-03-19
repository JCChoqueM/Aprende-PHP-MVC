<?php

namespace Ejercicios\Tema6;

use Ejercicios\EjercicioBase;

class Ejercicio18 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Decimal',
            'placeholder1' => 'Ingrese un número decimal',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que pase de decimal a binario.';
    }
}
