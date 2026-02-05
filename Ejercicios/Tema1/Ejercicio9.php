<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;
use Ejercicios\Contracts\EjercicioInterface;

class Ejercicio9 extends EjercicioBase
{
       protected static function obtenerResultado(): ResultadoTexto
    {
        $euro = 166.386;
        $peseta = 2;

        $contenido = $peseta . " pesetas es = " . ($peseta / $euro) . " euros";

        return new ResultadoTexto($contenido);
    }

    public static function enunciado(): string
    {
        return 'Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar almacenada en una variable.';
    }
}
