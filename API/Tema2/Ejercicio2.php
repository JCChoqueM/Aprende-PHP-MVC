<?php

namespace API\Tema2;

class Ejercicio2
{

    public static function procesar(): array
    {

        $boliviano = 6.96;
        $dolar = $_POST['campo1'] ?? null;

        $resultado = $dolar * $boliviano;

        return ([
            'success'   => true,
            'dolar'    => $dolar,
            'resultado' => $resultado,
        ]);
    }
}
