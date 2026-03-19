<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Horas Trabajadas'], [NoNegativo::class]);
        if (!$result['success']) return $result;

        ['Horas Trabajadas' => $horas] = $result['input'];

        // El render esperará:
        // data.input['Horas Trabajadas'] → horas trabajadas
        // data.respuesta                 → salario semanal

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}