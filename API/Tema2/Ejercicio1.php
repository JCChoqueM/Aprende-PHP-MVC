<?php

namespace API\Tema2;

class Ejercicio1
{

    public static function procesar()
    {
        $campo1 = $_POST['campo1'] ?? null;
        $campo2 = $_POST['campo2'] ?? null;

        // Multiplicar y responder
        $resultado = $campo1 * $campo2;

        return ([
            'success'   => true,
            'campo1'    => $campo1,
            'campo2'    => $campo2,
            'resultado' => $resultado,
        ]);
    }
}
