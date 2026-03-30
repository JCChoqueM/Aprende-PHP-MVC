<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio5 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['a', 'b']);
        if (!$result['success']) return $result;

        ['a' => $a, 'b' => $b] = $result['input'];

        if ($a == 0) {
            $result['respuesta'] = 'No tiene solución: a no puede ser 0';
            return $result;
        }

        $result['respuesta'] = round(-$b / $a, 2);

        return $result;

        return $result;
    }
}