<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio12 implements EjercicioInterface
{
    public static function resolver(): ResultadoHTML
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
