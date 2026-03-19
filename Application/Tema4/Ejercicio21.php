<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio21 extends AbstractEjercicio
{
    // PENDIENTE: requiere input dinámico (hasta número negativo)

    public static function procesar(): array
    {
        $result = ['success' => true];

        // El render esperará:
        // data.respuesta.cantidad     → cuántos números se han introducido
        // data.respuesta.mediaImpares → media de los impares
        // data.respuesta.mayorPar     → el mayor de los pares

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
