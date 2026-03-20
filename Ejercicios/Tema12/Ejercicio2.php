<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Usuario',
            'placeholder1' => 'Ingrese el nombre de usuario',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza una aplicación que obtenga información de usuarios de alguna red social como LinkedIn, Facebook, Instagram o alguna otra.';
    }
}
