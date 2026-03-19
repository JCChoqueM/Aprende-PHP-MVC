<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio23 extends AbstractEjercicio
{
    // PENDIENTE: requiere input dinámico (hasta suma > 10000)

    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.total    → total acumulado
        // data.respuesta.cantidad → cantidad de números introducidos
        // data.respuesta.media    → media de los números introducidos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
