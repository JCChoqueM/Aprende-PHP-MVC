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

        $numero = (int) $numero;

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → array con las filas de la tabla [['operacion' => '5 x 1', 'resultado' => 5], ...]

        $tabla = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabla[] = [
                'operacion' => "$numero x $i",
                'resultado' => $numero * $i,
            ];
        }

        $result['respuesta'] = $tabla;

        return $result;
    }
}