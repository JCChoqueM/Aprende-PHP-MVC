<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Radio', 'Altura'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Radio' => $radio, 'Altura' => $altura] = $result['input'];

        $result['respuesta'] = [
            'volumen' => round((1/3) * M_PI * pow($radio, 2) * $altura, 2),
        ];

        return $result;
    }
}