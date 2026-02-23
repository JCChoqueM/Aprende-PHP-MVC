<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio8 extends EjercicioBase
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
        return 'Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla (<table> en HTML).';
    }
}
