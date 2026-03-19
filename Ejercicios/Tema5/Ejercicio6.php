<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio6 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario8',
            'dato1' => 'Número 1',
            'placeholder1' => 'Ingrese el número 1',
            'dato2' => 'Número 2',
            'placeholder2' => 'Ingrese el número 2',
            'dato3' => 'Número 3',
            'placeholder3' => 'Ingrese el número 3',
            'dato4' => 'Número 4',
            'placeholder4' => 'Ingrese el número 4',
            'dato5' => 'Número 5',
            'placeholder5' => 'Ingrese el número 5',
            'dato6' => 'Número 6',
            'placeholder6' => 'Ingrese el número 6',
            'dato7' => 'Número 7',
            'placeholder7' => 'Ingrese el número 7',
            'dato8' => 'Número 8',
            'placeholder8' => 'Ingrese el número 8',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los pares de un color y los impares de otro.';
    }
}
