<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;

class Ejercicio18 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número 1', 'Número 2']);
        if (!$result['success']) return $result;

        ['Número 1' => $n1, 'Número 2' => $n2] = $result['input'];

        // El render esperará:
        // data.input['Número 1'] → primer número
        // data.input['Número 2'] → segundo número
        // data.respuesta         → array con los números entre ambos incrementando de 7 en 7

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
