<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio13 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendidos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos. Muestra a continuación por pantalla el contenido del array de tal forma que: los números de las dos diagonales donde está el mínimo deben aparecer en color verde, el mínimo debe aparecer en color azul, y el resto de números en color negro.';
    }
}
