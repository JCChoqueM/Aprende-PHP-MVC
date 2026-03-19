<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio12 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario5',
            'dato1' => 'Traducción 1',
            'placeholder1' => 'Ingrese la traducción en inglés',
            'dato2' => 'Traducción 2',
            'placeholder2' => 'Ingrese la traducción en inglés',
            'dato3' => 'Traducción 3',
            'placeholder3' => 'Ingrese la traducción en inglés',
            'dato4' => 'Traducción 4',
            'placeholder4' => 'Ingrese la traducción en inglés',
            'dato5' => 'Traducción 5',
            'placeholder5' => 'Ingrese la traducción en inglés',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas y cuántas erróneas.';
    }
}
