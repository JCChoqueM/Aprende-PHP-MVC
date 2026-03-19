<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio10 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Día', 'Mes'], [new Rango(1, 31)]);
        if (!$result['success']) return $result;

        ['Día' => $dia, 'Mes' => $mes] = $result['input'];

        // El render esperará:
        // data.input.Día     → día de nacimiento
        // data.input.Mes     → mes de nacimiento
        // data.respuesta     → signo del horóscopo

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}