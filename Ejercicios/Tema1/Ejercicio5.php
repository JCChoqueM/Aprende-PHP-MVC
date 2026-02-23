<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;
class Ejercicio5 extends EjercicioBase
{
    protected static function obtenerResultado(): ResultadoHTML
    {
        $x = 144;
        $y = 999;

        // Construimos el contenido HTML directamente
        $resultado = "La suma de $x + $y = " . ($x + $y);
        $resultado .= "<br>La resta de $x - $y = " . ($x - $y);
        $resultado .= "<br>La multiplicación de $x * $y = " . ($x * $y);
        $resultado .= "<br>La división de $x / $y = " . round($x / $y, 3);

        return new ResultadoHTML($resultado);
    }

    public static function enunciado(): string
    {
        return 'Escribe un programa que utilice las variables $x y $y. Asígnales los valores 144 y 999 respectivamente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división y la multiplicación.';
    }
}
