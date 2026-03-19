<?php

namespace Application\Tema6;

use Application\AbstractEjercicio;

class Ejercicio19 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Base origen']);
        if (!$result['success']) return $result;

        ['Número' => $numero, 'Base origen' => $baseOrigen] = $result['input'];

        // El render esperará:
        // data.input.Número              → número a convertir
        // data.input['Base origen']      → base de origen
        // data.respuesta.decimal         → en decimal
        // data.respuesta.binario         → en binario
        // data.respuesta.hexadecimal     → en hexadecimal
        // data.respuesta.octal           → en octal

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
