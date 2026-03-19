<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio16 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → 'Es primo' o 'No es primo'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
