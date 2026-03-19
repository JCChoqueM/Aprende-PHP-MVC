<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio16 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero
        // data.respuesta     → última cifra del número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}