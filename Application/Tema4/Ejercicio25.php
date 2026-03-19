<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio25 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → el número al revés

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
