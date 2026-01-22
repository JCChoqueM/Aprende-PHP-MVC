<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio6 implements EjercicioInterface
{
    public static function resolver(): ResultadoTexto
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
