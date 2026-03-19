<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio16 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número entero',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.';
    }
}