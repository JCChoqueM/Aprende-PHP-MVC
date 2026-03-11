<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número del día'], [new Rango(1, 7)]);

        if (!$result['success']) return $result;
        ['Número del día' => $numero] = $result['input'];

        switch ((int) $numero) {
            case 1: $dia = 'Lunes';     break;
            case 2: $dia = 'Martes';    break;
            case 3: $dia = 'Miércoles'; break;
            case 4: $dia = 'Jueves';    break;
            case 5: $dia = 'Viernes';   break;
            case 6: $dia = 'Sábado';    break;
            case 7: $dia = 'Domingo';   break;
        }

        $result['respuesta'] = $dia;

        return $result;
    }
}