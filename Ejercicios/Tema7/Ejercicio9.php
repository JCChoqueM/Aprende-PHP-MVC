<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio9 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Amplía el ejercicio 6 de tal forma que los productos que se pueden elegir para comprar se almacenen
en cookies. La aplicación debe ofrecer, por tanto, las opciones de alta, baja y modificación de
productos.';
    }
}
