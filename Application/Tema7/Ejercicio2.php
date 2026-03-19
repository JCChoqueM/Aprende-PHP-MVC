<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio2 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // Usa sesiones para acumular números hasta que se introduce uno negativo

        // El render esperará según el estado:
        // Si $numero >= 0:
        //   data.respuesta.estado    → 'acumulando'
        //   data.respuesta.cantidad  → cuántos números se han introducido
        // Si $numero < 0 (fin):
        //   data.respuesta.estado       → 'fin'
        //   data.respuesta.cantidad     → total de números introducidos
        //   data.respuesta.mediaImpares → media de los impares
        //   data.respuesta.mayorPar     → el mayor de los pares

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
