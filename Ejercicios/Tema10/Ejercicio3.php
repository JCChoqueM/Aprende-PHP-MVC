<?php

namespace Ejercicios\Tema10;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
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
        return 'Escribe un programa que calcule el área de un rectángulo.Añade estilos a la aplicación para hacerla más atractiva.';
    }
}
