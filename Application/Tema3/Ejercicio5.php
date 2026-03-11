<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Altura'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Base' => $base, 'Altura' => $altura] = $result['input'];

        $result['respuesta'] = round($base * $altura, 2);

        return $result;
    }
}