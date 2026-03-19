<?php

namespace Ejercicios\Tema5;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Valor a reemplazar',
            'placeholder1' => 'Ingrese el valor a buscar (0-20)',
            'dato2' => 'Nuevo valor',
            'placeholder2' => 'Ingrese el nuevo valor (0-20)',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente. Los números que se han cambiado deben aparecer resaltados de un color diferente.';
    }
}
