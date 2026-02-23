<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;
class Ejercicio12 extends EjercicioBase
{
       protected static function obtenerResultado(): ResultadoHTML
    {
        $contenido = '<pre>';
        $contenido .= '*********' . PHP_EOL;
        $contenido .= ' *     *' . PHP_EOL;
        $contenido .= '  *   *' . PHP_EOL;
        $contenido .= '   * *' . PHP_EOL;
        $contenido .= '    *' . PHP_EOL;
        $contenido .= '</pre>';

        return new ResultadoHTML($contenido);
    }


    public static function enunciado(): string
    {
        return 'Igual que el programa anterior, pero esta vez la pirámide debe aparecer invertida, con el vértice hacia abajo.';
    }
}
