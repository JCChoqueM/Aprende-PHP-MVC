<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio9 implements EjercicioInterface
{
    public static function resolver(): ResultadoTexto
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
