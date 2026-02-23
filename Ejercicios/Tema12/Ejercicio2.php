<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
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
        return 'Realiza una aplicación que obtenga información de usuarios de alguna red social como LinkedIn,
Facebook, Instagram o alguna otra.';
    }
}
