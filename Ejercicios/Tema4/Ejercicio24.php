<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio24 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Filas',
            'placeholder1' => 'Ingrese el número de filas de la pirámide',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que lea un número N e imprima una pirámide de números con N filas. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier para que los espacios tengan la misma anchura que los números.';
    }
}
