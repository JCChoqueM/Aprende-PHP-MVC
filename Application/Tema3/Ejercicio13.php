<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio13 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número 1', 'Número 2', 'Número 3']);
        if (!$result['success']) return $result;

        ['Número 1' => $n1, 'Número 2' => $n2, 'Número 3' => $n3] = $result['input'];

        // El render esperará:
        // data.input['Número 1'] → primer número
        // data.input['Número 2'] → segundo número
        // data.input['Número 3'] → tercer número
        // data.respuesta         → números ordenados de menor a mayor

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}