<?php

namespace Ejercicios\Tema11;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
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
        return 'Actualiza el blog realizado anteriormente de tal forma que todas las vistas estén implementadas en
Twig.';
    }
}
