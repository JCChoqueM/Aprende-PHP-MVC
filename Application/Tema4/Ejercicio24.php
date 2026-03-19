<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio24 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Filas'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Filas' => $filas] = $result['input'];

        // El render esperará:
        // data.input.Filas → número de filas
        // data.respuesta   → array de filas de la pirámide de números

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
