<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio7 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Precio de compra',
            'placeholder1' => 'Ingrese el precio de la compra',
            'dato2' => 'Base imponible %',
            'placeholder2' => 'Ingrese el valor de la base imponible',
            'valor2' => '10',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que calcule el total de una factura a partir de la base imponible.';
    }
}
