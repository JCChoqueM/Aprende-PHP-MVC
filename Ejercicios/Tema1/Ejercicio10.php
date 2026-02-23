<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio10 extends EjercicioBase
{
      protected static function obtenerResultado(): ResultadoHTML
{
    $contenido = '<pre>';
    $contenido .= '    *' . PHP_EOL;
    $contenido .= '   ***' . PHP_EOL;
    $contenido .= '  *****' . PHP_EOL;
    $contenido .= ' *******' . PHP_EOL;
    $contenido .= '*********' . PHP_EOL;
    $contenido .= '</pre>';

    return new ResultadoHTML($contenido);
}


    public static function enunciado(): string
    {
        return 'Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la pirámide debe estar formada por 9 asteriscos.';
    }
}
