<?php

namespace Ejercicios\Tema5;

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
        return 'Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
Al final se debe mostrar el array resultante.';
    }
}
