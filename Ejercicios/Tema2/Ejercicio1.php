<?php

namespace Ejercicios\Tema2;

use MVC\Router;
use Ejercicios\Resultado\ResultadoTexto;
use Ejercicios\Contracts\EjercicioInterface;

class Ejercicio1
{
    public static function enunciado(): string
    {
        return 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.';
    }
    public static function formulario(): array
    {
        return [
            'formulario' => true,
            'nombreFormulario' => 'formulario',
            'dato1' => 'multiplicando',
            'placeholder1' => 'Ingrese el primer numero',
            'dato2' => 'multiplicador',
            'placeholder2' => 'ingrese el segundo numero',
        ];
    }
}
