<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Primer Número',
            'placeholder1' => 'Ingrese el primer número',
            'dato2' => 'Segundo Número',
            'placeholder2' => 'Ingrese el segundo número',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.';
    }
}
