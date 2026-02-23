<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio15 extends EjercicioBase
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
        return 'Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo
infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes
utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas
contestadas con falso no suman puntos. Utiliza el fichero test_infidelidad.txt² para obtener las
preguntas y las conclusiones del programa.';
    }
}
