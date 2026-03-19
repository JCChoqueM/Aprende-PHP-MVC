<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio13 extends AbstractEjercicio
{
    // PENDIENTE: requiere input dinámico (lista de 10 números)

    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.positivos → cantidad de números positivos
        // data.respuesta.negativos → cantidad de números negativos

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
