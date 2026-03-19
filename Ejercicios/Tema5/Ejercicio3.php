<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario15',
            'dato1' => 'Número 1',
            'placeholder1' => 'Ingrese el número 1',
            'dato2' => 'Número 2',
            'placeholder2' => 'Ingrese el número 2',
            'dato3' => 'Número 3',
            'placeholder3' => 'Ingrese el número 3',
            'dato4' => 'Número 4',
            'placeholder4' => 'Ingrese el número 4',
            'dato5' => 'Número 5',
            'placeholder5' => 'Ingrese el número 5',
            'dato6' => 'Número 6',
            'placeholder6' => 'Ingrese el número 6',
            'dato7' => 'Número 7',
            'placeholder7' => 'Ingrese el número 7',
            'dato8' => 'Número 8',
            'placeholder8' => 'Ingrese el número 8',
            'dato9' => 'Número 9',
            'placeholder9' => 'Ingrese el número 9',
            'dato10' => 'Número 10',
            'placeholder10' => 'Ingrese el número 10',
            'dato11' => 'Número 11',
            'placeholder11' => 'Ingrese el número 11',
            'dato12' => 'Número 12',
            'placeholder12' => 'Ingrese el número 12',
            'dato13' => 'Número 13',
            'placeholder13' => 'Ingrese el número 13',
            'dato14' => 'Número 14',
            'placeholder14' => 'Ingrese el número 14',
            'dato15' => 'Número 15',
            'placeholder15' => 'Ingrese el número 15',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array.';
    }
}
