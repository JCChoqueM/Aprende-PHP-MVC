<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número inicial']);
        if (!$result['success']) return $result;

        ['Número inicial' => $inicio] = $result['input'];

        $inicio = (int) $inicio;

        $filas = [];

        for ($i = 0; $i < 5; $i++) {
            $n = $inicio + $i;

            $filas[] = [
                'numero'    => $n,
                'cuadrado'  => $n ** 2,
                'cubo'      => $n ** 3,
            ];
        }

        $result['respuesta'] = $filas;

        return $result;
    }
}