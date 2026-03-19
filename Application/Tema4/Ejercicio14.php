<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio14 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Exponente'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Base' => $base, 'Exponente' => $exponente] = $result['input'];

        // El render esperará:
        // data.input.Base      → la base
        // data.input.Exponente → el exponente
        // data.respuesta       → resultado de la potencia

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
