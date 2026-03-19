<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio6 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Altura (metros)'], [NoNegativo::class]);
        if (!$result['success']) return $result;

        ['Altura (metros)' => $altura] = $result['input'];

        // El render esperará:
        // data.input['Altura (metros)'] → altura en metros
        // data.respuesta                → tiempo en segundos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}