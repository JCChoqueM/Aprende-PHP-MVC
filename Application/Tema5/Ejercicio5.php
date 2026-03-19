<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $campos = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                   'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        $result = self::validar($campos);
        if (!$result['success']) return $result;

        $temperaturas = $result['input'];

        // El render esperará:
        // data.respuesta → array asociativo [mes => temperatura]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
