<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio8 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → array con las filas de la tabla [['operacion' => '5 x 1', 'resultado' => 5], ...]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
