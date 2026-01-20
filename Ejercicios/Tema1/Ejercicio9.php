<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio9 implements EjercicioInterface
{
    public static function enunciado(): string
    {
        return 'Prueba de renderizado básico';
    }

    public static function resolver(): mixed
    {
        return new ResultadoTexto("Hola\nMundo");
    }
}
