<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio12 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Términos'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Términos' => $n] = $result['input'];

        $n = (int) $n;

        $fibonacci = [];

        if ($n >= 1) $fibonacci[] = 0;
        if ($n >= 2) $fibonacci[] = 1;

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        $result['respuesta'] = $fibonacci;

        return $result;
    }
}