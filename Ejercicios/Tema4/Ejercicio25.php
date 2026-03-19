<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio25 extends EjercicioBase
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
        return 'Realiza un programa que pida un número por teclado y que luego muestre ese número al revés.';
    }
}
