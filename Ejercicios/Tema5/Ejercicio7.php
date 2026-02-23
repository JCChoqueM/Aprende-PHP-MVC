<?php

namespace Ejercicios\Tema5;

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
        return 'Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.';
    }
}
