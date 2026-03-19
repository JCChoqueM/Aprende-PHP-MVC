<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Hora'], [new Rango(0, 23)]);
        if (!$result['success']) return $result;

        ['Hora' => $hora] = $result['input'];

        // El render esperará:
        // data.input.Hora    → hora del 0 al 23
        // data.respuesta     → 'Buenos días', 'Buenas tardes' o 'Buenas noches'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}