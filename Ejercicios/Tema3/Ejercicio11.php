<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio11 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Horas',
            'placeholder1' => 'Ingrese las horas (0-23)',
            'dato2' => 'Minutos',
            'placeholder2' => 'Ingrese los minutos (0-59)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que faltan para llegar a la medianoche.';
    }
}