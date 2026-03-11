<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Multiplicando', 'Multiplicador']);
        if (!$result['success']) return $result;

        ['Multiplicando' => $multiplicando, 'Multiplicador' => $multiplicador] = $result['input'];

        $result['respuesta'] = round($multiplicando * $multiplicador, 2);

        return $result;
    }
}
