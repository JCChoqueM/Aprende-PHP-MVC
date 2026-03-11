<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionNumero;

class Ejercicio9
{
    public static function procesar(): array
    {
        $validador = (new ValidacionNumero());
        $result = $validador->ValidacionNumero(
            $_POST,
            ['radio', 'altura'],
        );

        if (!$result['success']) return $result;
        ['radio' => $radio, 'altura' => $altura] = $result['input'];

        // V = (1/3) * π * r² * h
        $volumen = round((1/3) * M_PI * pow($radio, 2) * $altura, 2);

        $result['respuesta'] = [
            'volumen' => $volumen,
        ];

        return $result;
    }
}