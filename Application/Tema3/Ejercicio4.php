<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;

class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Primer Número', 'Segundo Número']);

        if (!$result['success']) return $result;
        ['Primer Número' => $a, 'Segundo Número' => $b] = $result['input'];

        $result['respuesta'] = [
            'suma'           => round($a + $b, 2),
            'resta'          => round($a - $b, 2),
            'multiplicacion' => round($a * $b, 2),
            'division'       => $b != 0 ? round($a / $b, 2) : 'No se puede dividir por 0',
        ];

        return $result;
    }
}