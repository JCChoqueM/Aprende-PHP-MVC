<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio10 extends AbstractEjercicio
{
    // PENDIENTE: requiere input dinámico

    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.media    → media de los números positivos introducidos
        // data.respuesta.cantidad → cantidad de números introducidos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
