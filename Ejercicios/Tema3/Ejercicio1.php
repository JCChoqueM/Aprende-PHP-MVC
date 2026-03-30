<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Por favor, introduzca un día de la semana  (en minúsculas) y le diré
        qué asignatura toca a primera hora ese día:',
            'placeholder1' => 'Ingrese un número del 1 (Lunes) al 7 (Domingo)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a primera hora ese día.';
    }
}