<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Cantidad',
            'placeholder1' => 'Ingrese la cantidad a convertir',
            'dato2' => 'Moneda origen',
            'placeholder2' => 'euros o pesetas',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Crea un servicio web para pasar de euros a pesetas y de pesetas a euros. Si se pasa por la URL una cantidad en euros, el programa lo debe convertir en pesetas y viceversa.';
    }
}
