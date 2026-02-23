<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio24 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que lea un número N e imprima una pirámide de números con N filas como
en la siguiente figura. Recuerda utilizar un tipo de letra de ancho fijo como por ejemplo Courier
para que los espacios tengan la misma anchura que los números. 1';
    }
}
