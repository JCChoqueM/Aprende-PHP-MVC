<?php

namespace Application\Tema2;

use Application\Validacion\Reglas\NoNegativo;
use Application\Validacion\ValidacionNumero;

class Ejercicio7
{
    public static function procesar(): array
    {

        $validador = (new ValidacionNumero())->agregarRegla(NoNegativo::class);
        $result = $validador->ValidacionNumero(
            $_POST,
            ['Compra', 'baseImponible'],
        );

        if (!$result['success']) return $result;
        ['Compra' => $Compra, 'baseImponible' => $baseImponible] = $result['input'];


        $iva        = round($Compra * ($baseImponible / 100), 2);
        $total      = round($Compra + $iva, 2);

        $result['respuesta'] = [
            'iva'   => $iva,
            'total' => $total,
        ];

        return $result;
    }
}
