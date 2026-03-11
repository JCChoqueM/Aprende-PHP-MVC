<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio3 extends AbstractEjercicio
{
    private const TIPO_CAMBIO = 6.96;

    public static function procesar(): array
    {
        $result = self::validar(['Bolivianos'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Bolivianos' => $bolivianos] = $result['input'];

        $result['respuesta'] = round($bolivianos / self::TIPO_CAMBIO, 2);

        return $result;
    }
}