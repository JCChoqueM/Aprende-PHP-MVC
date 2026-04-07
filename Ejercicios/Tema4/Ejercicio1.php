<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;


class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }
    protected static function obtenerResultado(): ResultadoHTML
    {
        $numeros = [];

        for ($i = 0; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                $numeros[] = $i;
            }
        }

        $resultado = implode(', ', $numeros) . '.';

        return new ResultadoHTML($resultado);
    }
    protected static function enunciado(): string
    {
        return 'Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for.';
    }
}
