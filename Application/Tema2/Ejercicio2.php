<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio2 extends AbstractEjercicio
{
    private const TIPO_CAMBIO = 6.96;

    public static function procesar(): array
    {
        $result = self::validar(['Dolar $'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Dolar $' => $dolar] = $result['input'];

        $result['respuesta'] = round($dolar * self::TIPO_CAMBIO, 2);

        return $result;
    }
}