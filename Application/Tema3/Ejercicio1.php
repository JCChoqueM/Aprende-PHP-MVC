<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Día de la semana'], [new Rango(1, 7)]);
        if (!$result['success']) return $result;

        ['Día de la semana' => $dia] = $result['input'];

        // El render esperará:
        // data.input['Día de la semana'] → número del 1 al 7
        // data.respuesta                 → nombre de la asignatura

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}