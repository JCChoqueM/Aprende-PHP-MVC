<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio9 extends EjercicioBase
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
        return 'Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.';
    }
}
