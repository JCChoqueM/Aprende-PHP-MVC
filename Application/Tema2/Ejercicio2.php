<?php

namespace Application\Tema2;

use Application\Validacion\Reglas\NoNegativo;
use Application\Validacion\ValidacionNumero;

class Ejercicio2
{
    public static function procesar(): array
    {

        $validador = (new ValidacionNumero())->agregarRegla(NoNegativo::class);
        $result = $validador->ValidacionNumero(
            $_POST,
            ['Dolar'],
        );

        if (!$result['success']) return $result;

        $campo1 = $result['input']['Dolar'];
        $boliviano = 6.96;
        $resultado = round($boliviano * $campo1, 2);

        $result['respuesta'] = $resultado;

        return $result;
    }
}
