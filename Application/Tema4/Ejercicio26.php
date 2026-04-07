<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;


class Ejercicio26 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número', 'Dígito']);
        if (!$result['success']) return $result;

        ['Número' => $numero, 'Dígito' => $digito] = $result['input'];

        // El render esperará:
        // data.input.Número  → el número introducido
        // data.input.Dígito  → el dígito a buscar
        // data.respuesta     → array con las posiciones donde aparece el dígito

        $result['respuesta'] = [];
        for ($i = 0; $i < strlen($numero); $i++) {
            if ($numero[$i] === $digito) {
                $result['respuesta'][] = $i;
            }
        }

        return $result;
    }
}
