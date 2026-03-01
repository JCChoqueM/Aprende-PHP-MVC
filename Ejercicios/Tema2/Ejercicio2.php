<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function enunciado(): string
    {
        return 'Realiza un conversor de Dolares a Bolivianos. La cantidad en dolares se introduce por teclado.';
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Dolar $',
            'placeholder1' => 'Ingrese el valor de Dolares que desea convertir',
        ];
    }


}