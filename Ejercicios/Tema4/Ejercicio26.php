<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio26 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número entero',
            'dato2' => 'Dígito',
            'placeholder2' => 'Ingrese el dígito a buscar (0-9)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que pida primero un número y a continuación un dígito. El programa nos debe dar la posición (o posiciones) contando de izquierda a derecha que ocupa ese dígito en el número introducido.';
    }
}
