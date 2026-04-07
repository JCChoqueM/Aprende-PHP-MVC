<?php

namespace Ejercicios\Tema4;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio22 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Muestra por pantalla todos los números primos entre 2 y 100, ambos incluidos.';
    }
    protected static function obtenerResultado(): ResultadoHTML
    {
        $primos = self::obtenerPrimos(100);
        $resultado = implode(', ', $primos) . '.';


        return new ResultadoHTML($resultado);
    }
    private static function obtenerPrimos(int $limite): array
    {

        $primos = [];

        for ($i = 2; $i <= $limite; $i++) {

            $esPrimo = true;
            $raiz = sqrt($i); // calcular una sola vez

            foreach ($primos as $p) {

                if ($p > $raiz) {
                    break;
                }

                if ($i % $p === 0) {
                    $esPrimo = false;
                    break;
                }
            }

            if ($esPrimo) {
                $primos[] = $i;
            }
        }

        return $primos;
    }
}
