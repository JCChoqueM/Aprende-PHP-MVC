<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio17 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero (máximo 5 cifras)
        // data.respuesta     → primera cifra del número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}