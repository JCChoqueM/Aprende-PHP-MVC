<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio5 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }
 protected static function obtenerResultado(): ResultadoHTML
    {
        $numeros = [];
        $i = 320;
        while ($i >= 160) {
                $numeros[] = $i;      
            $i-=20;
        }

        $resultado = implode(', ', $numeros) . '.';

        return new ResultadoHTML($resultado);
    }
    protected static function enunciado(): string
    {
        return 'Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while.';
    }
}
