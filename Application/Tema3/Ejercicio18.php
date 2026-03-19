<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio18 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero (positivo o negativo, máximo 5 dígitos)
        // data.respuesta     → cantidad de dígitos del número

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}