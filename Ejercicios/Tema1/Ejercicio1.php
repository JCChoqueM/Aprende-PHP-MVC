<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio1 implements EjercicioInterface
{
    public static function resolver(): ResultadoTexto
    {
        // Devuelve un objeto que sabe cómo renderizarse en HTML
        return new ResultadoTexto("Mi nombre es Julio Cesar Choque Mamani");
    }

    public static function enunciado(): string
    {
        return 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.';
    }
      public static function formulario(): array
    {
        return ['formulario'=>false];
    }
}
