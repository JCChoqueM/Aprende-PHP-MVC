<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio1 extends EjercicioBase
{
    protected static function enunciado(): string
    {
        return 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.';
    }

    protected static function obtenerResultado(): ResultadoTexto
    {
        return new ResultadoTexto("Mi nombre es Julio Cesar Choque Mamani");
    }
}