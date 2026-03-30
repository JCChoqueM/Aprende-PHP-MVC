<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio6 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }
    protected static function obtenerResultado(): ResultadoHTML
    {
        $numeros = [];
        $i = 320;
        do {

            $numeros[] = $i;

            $i -= 20;
        } while ($i >= 160);

        $resultado = implode(', ', $numeros) . '.';

        return new ResultadoHTML($resultado);
    }
    protected static function enunciado(): string
    {
        return 'Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while.';
    }
}
