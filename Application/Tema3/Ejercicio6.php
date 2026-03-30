<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio6 extends AbstractEjercicio
{
    private const gravedad = 9.81;
    public static function procesar(): array
    {
        $result = self::validar(['Altura (metros)'], [NoNegativo::class]);
        if (!$result['success']) return $result;

        ['Altura (metros)' => $altura] = $result['input'];
        $dividendo = 2 * $altura;
        $tiempo = sqrt($dividendo / self::gravedad);


        $result['respuesta'] = round($tiempo, 2);
        return $result;
    }
}
