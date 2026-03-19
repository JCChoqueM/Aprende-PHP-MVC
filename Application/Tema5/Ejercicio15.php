<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio15 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.original → matriz 12x12 original
        // data.respuesta.rotada   → matriz 12x12 rotada en sentido horario

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
