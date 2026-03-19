<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio28 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número entero positivo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el factorial de un número entero leído por teclado.';
    }
}
