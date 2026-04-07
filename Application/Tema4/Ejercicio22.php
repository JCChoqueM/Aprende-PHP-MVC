<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio22 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta → array con todos los números primos entre 2 y 100

        $limite = 100;
        $primos = [];

        for ($i = 2; $i <= $limite; $i++) {
            $esPrimo = true;

            foreach ($primos as $p) {
                // optimización: no seguir si p^2 > i
                if ($p * $p > $i) {
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

        $result['respuesta'] = $primos;

        return $result;
    }
}
