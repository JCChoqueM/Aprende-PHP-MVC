<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio1 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // Usa sesiones para acumular números hasta que se introduce uno negativo
        // session_start() debe llamarse antes

        // El render esperará según el estado:
        // Si $numero >= 0:
        //   data.respuesta.estado    → 'acumulando'
        //   data.respuesta.cantidad  → cuántos números se han introducido
        //   data.respuesta.suma      → suma acumulada
        // Si $numero < 0 (fin):
        //   data.respuesta.estado    → 'fin'
        //   data.respuesta.cantidad  → total de números introducidos
        //   data.respuesta.media     → media de los números

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
