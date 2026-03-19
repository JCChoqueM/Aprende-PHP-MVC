<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio19 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Altura', 'Símbolo'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Altura' => $altura, 'Símbolo' => $simbolo] = $result['input'];

        // El render esperará:
        // data.input.Altura  → altura de la pirámide
        // data.input.Símbolo → símbolo elegido
        // data.respuesta     → array de filas de la pirámide

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
