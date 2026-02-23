<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio15 extends EjercicioBase
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
        return 'Escribe un programa que dados dos números, uno real (base) y un entero positivo (exponente), saque
por pantalla todas las potencias con base el numero dado y exponentes entre uno y el exponente
introducido. No se deben utilizar funciones de exponenciación. Por ejemplo, si introducimos el 2 y
el 5, se deberán mostrar 2¹, 2², 2³, 2⁴, 2⁵.';
    }
}
