<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio7 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Compra', 'baseImponible'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Compra' => $compra, 'baseImponible' => $baseImponible] = $result['input'];

        $iva   = round($compra * ($baseImponible / 100), 2);
        $total = round($compra + $iva, 2);

        $result['respuesta'] = [
            'iva'   => $iva,
            'total' => $total,
        ];

        return $result;
    }
}