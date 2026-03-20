<?php

namespace Application\Tema12;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio3 extends AbstractEjercicio
{
    private const PESETAS_POR_EURO = 166.386;

    public static function procesar(): array
    {
        $result = self::validar(['Cantidad', 'Moneda origen'], [NoNegativo::class]);
        if (!$result['success']) return $result;

        ['Cantidad' => $cantidad, 'Moneda origen' => $moneda] = $result['input'];

        // El render esperará:
        // data.input.Cantidad          → cantidad introducida
        // data.input['Moneda origen']  → 'euros' o 'pesetas'
        // data.respuesta.origen        → cantidad y moneda de origen
        // data.respuesta.destino       → cantidad y moneda de destino
        // data.respuesta.resultado     → número resultado redondeado

        // Tu lógica aquí
        // if ($moneda === 'euros') $resultado = round($cantidad * self::PESETAS_POR_EURO, 2);
        // else $resultado = round($cantidad / self::PESETAS_POR_EURO, 4);
        // $result['respuesta'] = ...

        return $result;
    }
}
