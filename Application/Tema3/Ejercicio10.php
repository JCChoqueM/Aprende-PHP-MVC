<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio10 extends AbstractEjercicio
{
    private const MB_A_KB = 1024;

    public static function procesar(): array
    {
        $result = self::validar(['Megabytes'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Megabytes' => $mb] = $result['input'];

        $result['respuesta'] = [
            'kilobytes' => $mb * self::MB_A_KB,
        ];

        return $result;
    }
}