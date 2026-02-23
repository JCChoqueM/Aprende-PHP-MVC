<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio7 extends EjercicioBase
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
        return 'Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de
una página. Esta página debe tener únicamente algo de texto y un formulario para cambiar el color.';
    }
}
