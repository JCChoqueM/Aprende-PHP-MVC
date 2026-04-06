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

        $numero = abs($numero);
        $contador = 0;

        while ($numero > 0) {
            $numero = (int) ($numero / 10);
            $contador++;
        }

        $result['respuesta'] = $contador;

        return $result;
    }
}
