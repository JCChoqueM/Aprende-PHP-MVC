<?php

namespace Ejercicios\Tema12;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Número de cartas',
            'placeholder1' => 'Ingrese cuántas cartas quiere (1-40)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Crea un servicio web que proporcione de forma aleatoria un mazo de cartas de la baraja española. Se pasa el número de cartas que se quiere obtener y la aplicación provee el palo y la figura de cada una de las cartas. Las cartas no se pueden repetir. Si el número es menor que 1 o mayor que 40, se debe devolver un error.';
    }
}
