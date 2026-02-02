<?php

namespace Ejercicios\Tema2;
use MVC\Router;
use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoTexto;

class Ejercicio2 //implements EjercicioInterface
{
   

    public static function enunciado(): string
    {
        return 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.';
    }
    public static function formulario(): array
    {
        return [
            'formulario' => true,
            'nombreFormulario' => 'formulario3',
            'dato1' => 'multiplicando',
            'placeholder1' => 'Ingrese el primer numero',
            'dato2' => 'multiplicador',
            'placeholder2' => 'ingrese el segundo numero',
            'dato3' => 'resultado',
            'placeholder3' => 'este es su resultado',
        ];
    }
}
