<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio29 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número límite', 'Divisor'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Número límite' => $limite, 'Divisor' => $divisor] = $result['input'];

        // El render esperará:
        // data.input['Número límite'] → el número límite
        // data.input.Divisor          → el divisor
        // data.respuesta              → array con los números no divisibles entre el divisor

        $result['respuesta'] = [];
        for ($i = 1; $i <= $limite; $i++) {
            if ($i % $divisor !== 0) {
                $result['respuesta'][] = $i;
            }
        }

        return $result;
    }
}
