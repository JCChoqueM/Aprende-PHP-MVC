<?php

namespace Application\Tema2;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\NoNegativo;

class Ejercicio8 extends AbstractEjercicio
{
    private const PRECIO_HORA = 12;

    public static function procesar(): array
    {
        $result = self::validar(['Horas Trabajadas'], [NoNegativo::class]);

        if (!$result['success']) return $result;
        ['Horas Trabajadas' => $horas] = $result['input'];

        $result['respuesta'] = [
            'precioHora' => self::PRECIO_HORA,
            'salario'    => round($horas * self::PRECIO_HORA, 2),
        ];

        return $result;
    }
}