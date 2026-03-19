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

        // El render esperará:
        // data.input.Términos → número de términos
        // data.respuesta      → array con los términos de Fibonacci

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
