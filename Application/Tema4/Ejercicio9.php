<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio9 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → cantidad de dígitos del número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
