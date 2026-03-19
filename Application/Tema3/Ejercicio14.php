<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio14 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero
        // data.respuesta     → mensaje indicando si es par y/o divisible entre 5

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}