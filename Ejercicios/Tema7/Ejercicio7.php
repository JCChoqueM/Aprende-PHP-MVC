<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio7 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Color de fondo',
            'placeholder1' => 'Ingrese un color (ej: #ff0000 o red)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.';
    }
}
