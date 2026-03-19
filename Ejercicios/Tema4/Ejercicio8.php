<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio8 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese el número para la tabla de multiplicar',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML).';
    }
}
