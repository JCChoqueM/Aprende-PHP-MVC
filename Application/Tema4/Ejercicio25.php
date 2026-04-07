<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio25 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número']);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.respuesta     → el número al revés
        $numero = abs($numero);
        $volteado = 0;
        for ($i = $numero; $i > 0; $i = intdiv($i, 10)) {
            $volteado *= 10;
            $volteado += $i % 10;
        }
        $result['respuesta'] = $volteado;


        return $result;
    }
}
