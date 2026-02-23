<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
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
        return 'Crea un servicio web que proporcione de forma aleatoria un mazo de cartas de la baraja española.
Por la URL se pasa el número de cartas que se quiere obtener y la aplicación provee el palo y la
figura de cada una de las cartas. Se supone que el mazo se obtiene de una baraja, por tanto, las
cartas no se pueden repetir. Si el número que se pasa en la URL es menor que 1 o mayor que 40, se
debe devolver un error.';
    }
}
