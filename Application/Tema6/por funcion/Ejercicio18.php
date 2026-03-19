<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio18 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Decimal']);
        if (!$result['success']) return $result;

        ['Decimal' => $decimal] = $result['input'];

        // El render esperará:
        // data.input.Decimal  → número decimal introducido
        // data.respuesta      → número binario resultado

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
