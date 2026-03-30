<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio11 extends AbstractEjercicio
{
    private const KB_A_MB = 1024;

    public static function procesar(): array
    {
        $result = self::validar(['Kilobytes'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Kilobytes' => $kb] = $result['input'];

        $result['respuesta'] = [
            'megabytes' => round($kb / self::KB_A_MB, 4),
        ];

        return $result;
    }
}
