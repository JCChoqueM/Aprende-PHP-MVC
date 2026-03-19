<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio6 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Altura (metros)',
            'placeholder1' => 'Ingrese la altura desde la que cae el objeto',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h. Aplica la fórmula t = √(2h/g) siendo g = 9.81m/s²';
    }
}