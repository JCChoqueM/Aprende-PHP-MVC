<?php

namespace Ejercicios\Tema5;

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
        return 'Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
resultado, ambas con los números convenientemente alineados.';
    }
}
