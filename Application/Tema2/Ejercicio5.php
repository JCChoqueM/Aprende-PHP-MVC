<?php

namespace Application\Tema2;

use Application\Validacion\Reglas\NoNegativo;
use Application\Validacion\ValidacionNumero;

class Ejercicio5
{
    public static function procesar(): array
    {

        $validador = (new ValidacionNumero())->agregarRegla(NoNegativo::class);
        $result = $validador->ValidacionNumero(
            $_POST,
            ['Base', 'Altura'],
        );

        if (!$result['success']) return $result;
        ['Base' => $Base, 'Altura' => $Altura] = $result['input'];

        $area = $Base * $Altura;
        $result['respuesta'] = $area;
        return $result;
    }
}
