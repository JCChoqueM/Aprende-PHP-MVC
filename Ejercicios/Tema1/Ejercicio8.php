<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;
class Ejercicio8 extends EjercicioBase
{
       protected static function obtenerResultado(): ResultadoTexto
    {
        $euro = 2;
        $peseta = 166.386;
        $contenido= $euro . " euros es = " . ($euro * $peseta) . " pesetas";

        return new ResultadoTexto($contenido);
    }

    public static function enunciado(): string
    {
        return 'Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar almacenada en una variable.';
    }
}
