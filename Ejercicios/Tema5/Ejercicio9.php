<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio9 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario12',
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
            'dato11' => 'Posición inicial',
            'placeholder11' => 'Ingrese la posición inicial (0-9)',
            'dato12' => 'Posición final',
            'placeholder12' => 'Ingrese la posición final (0-9)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Realiza un programa que pida 10 números por teclado y que los almacene en un array. A continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa pedirá dos posiciones a las que llamaremos "inicial" y "final". Se debe comprobar que inicial es menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno. Al final se debe mostrar el array resultante.';
    }
}
