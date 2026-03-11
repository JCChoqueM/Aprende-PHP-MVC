<?php

namespace Application\Tema2;

use Application\Validacion\ValidacionNumero;

class Ejercicio8
{
    private const PRECIO_HORA = 12;

    public static function procesar(): array
    {
        $validador = (new ValidacionNumero());
        $result = $validador->ValidacionNumero(
            $_POST,
            ['horasTrabajadas'],
        );

        if (!$result['success']) return $result;
        ['horasTrabajadas' => $horas] = $result['input'];

        $salario = round($horas * self::PRECIO_HORA, 2);

        $result['respuesta'] = [
            'precioHora' => self::PRECIO_HORA,
            'salario'    => $salario,
        ];

        return $result;
    }
}