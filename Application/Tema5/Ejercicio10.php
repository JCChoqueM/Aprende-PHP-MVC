<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio10 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.cartas  → array de cartas escogidas [nombre, palo, puntos]
        // data.respuesta.total   → total de puntos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
