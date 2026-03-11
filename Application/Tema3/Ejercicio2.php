<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Hora'], [new Rango(0, 23)]);

        if (!$result['success']) return $result;
        ['Hora' => $hora] = $result['input'];
        /* 
        $hora = (int) $hora;

        $result['respuesta'] = match(true) {
            $hora >= 6  && $hora <= 12 => 'Buenos días',
            $hora >= 13 && $hora <= 20 => 'Buenas tardes',
            default                    => 'Buenas noches',
        };

        return $result; */
        $hora = (int) $hora;

        if ($hora >= 6 && $hora <= 12) {
            $saludo = 'Buenos días';
        } elseif ($hora >= 13 && $hora <= 20) {
            $saludo = 'Buenas tardes';
        } else {
            $saludo = 'Buenas noches';
        }

        $result['respuesta'] = $saludo;
           return $result;
    }
}
