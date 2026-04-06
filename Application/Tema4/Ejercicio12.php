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

       $actual = 0;
       $siguiente = 1;
       $fibonacci = [];

       for ($i = 0; $i < $n; $i++) {
           $fibonacci[] = $actual;
           $siguiente += $actual;
           $actual = $siguiente - $actual;
       }

        $result['respuesta'] = $fibonacci;

        return $result;
    }
}