<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Horas', 'Minutos'], [new Rango(0, 59)]);
        if (!$result['success']) return $result;

        ['Horas' => $horas, 'Minutos' => $minutos] = $result['input'];

        // El render esperará:
        // data.input.Horas    → horas (0-23)
        // data.input.Minutos  → minutos (0-59)
        // data.respuesta      → segundos que faltan para medianoche

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}