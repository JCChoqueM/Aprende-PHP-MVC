<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionNumero;

class Ejercicio10
{
    private const KB_A_MB = 1024;

    public static function procesar(): array
    {
        $validador = (new ValidacionNumero());
        $result = $validador->ValidacionNumero(
            $_POST,
            ['kilobytes'],
        );

        if (!$result['success']) return $result;
        ['kilobytes' => $kb] = $result['input'];

        $result['respuesta'] = [
            'megabytes' => round($kb / self::KB_A_MB, 4),
        ];

        return $result;
    }
}