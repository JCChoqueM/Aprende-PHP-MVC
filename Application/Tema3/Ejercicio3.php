<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número del día'], [new Rango(1, 7)]);
        if (!$result['success']) return $result;

        ['Número del día' => $numero] = $result['input'];

        // El render esperará:
        // data.input['Número del día'] → número del 1 al 7
        // data.respuesta               → nombre del día de la semana

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}