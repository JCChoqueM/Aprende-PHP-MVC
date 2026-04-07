<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;


class Ejercicio19 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Altura', 'Símbolo']);
        if (!$result['success']) return $result;

        ['Altura' => $altura, 'Símbolo' => $simbolo] = $result['input'];

        $altura = (int) $altura;

        $piramide = [];

        for ($i = 1; $i <= $altura; $i++) {

            // espacios a la izquierda
            $espacios = str_repeat('&nbsp;', $altura - $i);

            // cantidad de símbolos (impar: 1,3,5,...)
            $figura = str_repeat($simbolo, 2 * $i - 1);

            $piramide[] = $espacios . $figura;
        }

        $result['respuesta'] = $piramide;

        return $result;
    }
}