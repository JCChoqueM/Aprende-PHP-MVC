<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function enunciado(): string
    {
        return 'Realiza un conversor de bolivianos a dolar. La cantidad en pesetas que se quiere convertir se deberá
introducir por teclado.';
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario1',
            'dato1' => 'Convertir',
            'placeholder1' => 'Ingrese el valor de Bolivianos que desea convertir',
        ];
    }

}