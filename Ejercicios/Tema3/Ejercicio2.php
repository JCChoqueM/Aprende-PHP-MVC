<?php

namespace Ejercicios\Tema3;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
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
        return 'Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.';
    }
}
