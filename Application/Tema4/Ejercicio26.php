<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio26 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Dígito'], [new Rango(0, 9)]);
        if (!$result['success']) return $result;

        ['Número' => $numero, 'Dígito' => $digito] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.input.Dígito  → el dígito a buscar
        // data.respuesta     → array con las posiciones donde aparece el dígito

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
