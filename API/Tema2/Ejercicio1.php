<?php

namespace API\Tema2;


use API\Resultado\Resultado_Scalar;

class Ejercicio1
{

    public static function procesar(): array
    {
        $a = (float) ($_POST['campo1'] ?? 0);
        $b = (float) ($_POST['campo2'] ?? 0);

        $resultado = new Resultado_Scalar(
            'Resultado de la multiplicación',
            $a * $b
        );

        return [
            'ok' => true
        ] + $resultado->toArray();
    }
}
