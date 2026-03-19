<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio7 extends AbstractEjercicio
{
    private const COMBINACION = 1234;

    public static function procesar(): array
    {
        $result = self::validar(['Combinación'], [new Rango(1000, 9999)]);
        if (!$result['success']) return $result;

        ['Combinación' => $combinacion] = $result['input'];

        // El render esperará:
        // data.input.Combinación → combinación introducida
        // data.respuesta.abierta → true/false
        // data.respuesta.mensaje → 'La caja fuerte se ha abierto satisfactoriamente' o 'Lo siento, esa no es la combinación'

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
