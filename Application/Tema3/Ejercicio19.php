<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio19 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero positivo (máximo 5 cifras)
        // data.respuesta     → mensaje indicando si es capicúa o no

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}