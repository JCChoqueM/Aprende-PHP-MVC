<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio17 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Binario']);
        if (!$result['success']) return $result;

        ['Binario' => $binario] = $result['input'];

        // El render esperará:
        // data.input.Binario  → número binario introducido
        // data.respuesta      → número decimal resultado

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
