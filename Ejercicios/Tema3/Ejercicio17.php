<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio17 extends EjercicioBase
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
        return 'Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado.
Se permiten números de hasta 5 cifras.';
    }
}
