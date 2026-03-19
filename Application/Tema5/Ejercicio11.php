<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Palabra']);
        if (!$result['success']) return $result;

        ['Palabra' => $palabra] = $result['input'];

        // El render esperará:
        // data.input.Palabra     → palabra en español buscada
        // data.respuesta         → traducción en inglés o mensaje de no encontrada

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
