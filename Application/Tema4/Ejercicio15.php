<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio15 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Exponente'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Base' => $base, 'Exponente' => $exponente] = $result['input'];

        // El render esperará:
        // data.input.Base      → la base
        // data.input.Exponente → el exponente máximo
        // data.respuesta       → array con [['exponente' => n, 'resultado' => base^n], ...]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
