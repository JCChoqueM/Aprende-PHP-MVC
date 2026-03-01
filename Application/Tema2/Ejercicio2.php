<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionGeneral;

class Ejercicio2
{

    public static function procesar(): array
    {
$result = (new ValidacionGeneral())->procesar(
            ['campo1'=>'dolar'],      
        );

        if (!$result['success']) {
            return $result;
        }
        $dolar = $result['campo1'];
        $boliviano = 6.96;
       

        $resultado = $dolar * $boliviano;

        return ([
            'success'   => true,
            'dolar'    => $dolar,
            'resultado' => $resultado,
        ]);
    }
}
