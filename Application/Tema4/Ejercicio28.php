<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio28 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [NoNegativo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → el factorial del número

        $result['respuesta'] = 1;
        for ($i = 1; $i <= $numero; $i++) {
            $result['respuesta'] *= $i;
        }

        return $result;
    }
}
