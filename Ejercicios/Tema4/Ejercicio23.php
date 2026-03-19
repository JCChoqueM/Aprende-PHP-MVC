<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio23 extends EjercicioBase
{
    // PENDIENTE: requiere input dinámico (hasta suma > 10000)

    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que permita ir introduciendo una serie indeterminada de números hasta que la suma de ellos supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números introducidos y la media.';
    }
}
