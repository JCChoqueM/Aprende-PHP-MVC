<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
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
        return 'Modifica la tienda virtual realizada anteriormente de tal forma que todos los datos de los artículos
se guarden en una base de datos.';
    }
}
