<?php

namespace Application\Tema9;

use Application\AbstractEjercicio;

class Ejercicio3 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Usa sesiones para acumular el total de tiradas

        // El render esperará:
        // data.respuesta.dados          → array de 5 dados [{numero, figura}]
        //                                 figura: 'As', 'K', 'Q', 'J', '7', '8'
        // data.respuesta.tiradasTotales → total de tiradas acumuladas entre todos los dados

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
