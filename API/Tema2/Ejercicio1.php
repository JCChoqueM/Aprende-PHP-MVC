<?php

namespace API\Tema2;

use API\Validacion\ValidacionGeneral;

class Ejercicio1
{
    public static function procesar(): array
    {
        $result = (new ValidacionGeneral())->procesar(
            ['campo1'=>'Multiplicando',
             'campo2'=>'Multiplicador'],      
        );

        if (!$result['success']) {
            return $result;
        }
        $campo1 = $result['campo1'];
        $campo2 = $result['campo2'];

        return [
            'success'   => true,
            'campo1'    => $campo1,
            'campo2'    => $campo2,
            'resultado' => $campo1 * $campo2,
        ];
    }
}
