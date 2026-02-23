<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;

class Ejercicio17 extends EjercicioBase
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
        return 'Realiza un programa que sume los 100 números siguientes a un número entero y positivo
introducido por teclado. Se debe comprobar que el dato introducido es correcto (que es un número
positivo).';
    }
}
