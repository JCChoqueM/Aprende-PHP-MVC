<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionNumero;

class Ejercicio9
{
    private const MB_A_KB = 1024;

    public static function procesar(): array
    {
        $validador = (new ValidacionNumero());
        $result = $validador->ValidacionNumero(
            $_POST,
            ['megabytes'],
        );

        if (!$result['success']) return $result;
        ['megabytes' => $mb] = $result['input'];

        $result['respuesta'] = [
            'kilobytes' => $mb * self::MB_A_KB,
        ];

        return $result;
    }
}