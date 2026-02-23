<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio11 extends EjercicioBase
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
        return 'Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.';
    }
}
