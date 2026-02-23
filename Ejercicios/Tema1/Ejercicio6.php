<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio6 extends EjercicioBase
{
       protected static function obtenerResultado(): ResultadoTexto
    {
        $nombre='Mi nombre es Composer Update';
        // Devuelve un objeto que sabe cómo renderizarse en HTML
        return new ResultadoTexto($nombre);
    }

    public static function enunciado(): string
    {
        return 'Crea la variable $nombre y asígnale tu nombre completo. Muestra su valor por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 1.';
    }

}
