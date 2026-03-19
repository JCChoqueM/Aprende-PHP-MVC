<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio27 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número          → el número límite
        // data.respuesta.multiplos   → array con los múltiplos de 3
        // data.respuesta.cantidad    → cantidad de múltiplos encontrados
        // data.respuesta.suma        → suma de todos los múltiplos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
