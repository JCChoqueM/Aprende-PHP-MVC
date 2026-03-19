<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio29 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Número límite',
            'placeholder1' => 'Ingrese el número límite',
            'dato2' => 'Divisor',
            'placeholder2' => 'Ingrese el divisor',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que muestre por pantalla todos los números enteros positivos menores a uno leído por teclado que no sean divisibles entre otro también leído de igual forma.';
    }
}
