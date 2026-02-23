<?php

namespace Ejercicios\Tema7;

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
        return 'Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.';
    }
}
