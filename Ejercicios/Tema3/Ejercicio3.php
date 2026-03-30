<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Introduzca un número del 1 al 7:',
            'placeholder1' => 'Ingrese un número del 1 (Lunes) al 7 (Domingo)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día de la semana.';
    }
}