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

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
