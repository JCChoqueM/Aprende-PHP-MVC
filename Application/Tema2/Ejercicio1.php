<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionNumero;

class Ejercicio1
{
    public static function procesar(): array
    {
        $validador = (new ValidacionNumero());
        $result = $validador->ValidacionNumero(
            $_POST,
            ['Multiplicando', 'Multiplicador'],
        );

        if (!$result['success']) return $result;

        $campo1 = $result['input']['Multiplicando'];
        $campo2 = $result['input']['Multiplicador'];
        $resultado = round($campo1 * $campo2, 2);

        $result['respuesta'] = $resultado;

        return $result;
    }
}
