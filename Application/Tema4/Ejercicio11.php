<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número inicial']);
        if (!$result['success']) return $result;

        ['Número inicial' => $inicio] = $result['input'];

        // El render esperará:
        // data.input['Número inicial'] → número inicial
        // data.respuesta               → array con [['numero' => n, 'cuadrado' => n², 'cubo' => n³], ...]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
