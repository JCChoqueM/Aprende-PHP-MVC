<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio10 extends EjercicioBase
{
    // PENDIENTE: requiere input dinámico (el usuario introduce números hasta meter uno negativo)

    protected static function obtenerConfiguracionFormulario(): array
    {
       return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número entero',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo.';
    }
}
