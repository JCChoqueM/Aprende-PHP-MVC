<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número',
            'placeholder1' => 'Ingrese un número (negativo para terminar)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que vaya pidiendo números hasta que se introduzca un número negativo y nos diga cuántos números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye en el cómputo. Utiliza sesiones.';
    }
}
