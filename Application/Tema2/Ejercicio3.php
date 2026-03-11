<?php

namespace Application\Tema2;

use Application\Validacion\Reglas\NoNegativo;
use Application\Validacion\ValidacionNumero;

class Ejercicio3
{
    public static function procesar(): array
    {

        $validador = (new ValidacionNumero())->agregarRegla(NoNegativo::class);
        $result = $validador->ValidacionNumero(
            $_POST,
            ['Bolivianos'],
        );

        if (!$result['success']) return $result;

        $valorIngresado = $result['input']['Boliviano'];
   
        $resultado = round($valorIngresado / 6.96, 2);

        $result['respuesta'] = $resultado;

        return $result;
    }
}
