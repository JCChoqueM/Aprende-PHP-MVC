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

        // El render esperará:
        // data.input['Número del día'] → número del 1 al 7
        // data.respuesta               → nombre del día de la semana

        // Tu lógica aquí
        switch ($numero) {
            case 1:
                $result['respuesta'] = 'Lunes';
                break;
            case 2:
                $result['respuesta'] = 'Martes';
                break;
            case 3:
                $result['respuesta'] = 'Miercoles';
                break;
            case 4:
                $result['respuesta'] = 'Jueves';
                break;
            case 5:
                $result['respuesta'] = 'Viernes';
                break;
            case 6:
                $result['respuesta'] = 'Sabado';
                break;
            case 7:
                $result['respuesta'] = 'Domingo';
                break;
        }

        return $result;
    }
}