<?php

namespace Application\Tema4;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\EsPositivo;

class Ejercicio15 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Base', 'Exponente'], [EsPositivo::class]);
        if (!$result['success']) return $result;

        ['Base' => $base, 'Exponente' => $exponente] = $result['input'];

        $base = (float) $base;
        $exponente = (int) $exponente;

        $respuesta = [];
        $acumulado = 1;

        for ($i = 1; $i <= $exponente; $i++) {
            $acumulado *= $base;

            $respuesta[] = [
                'exponente' => $i,
                'resultado' => $acumulado
            ];
        }

        $result['respuesta'] = $respuesta;

        return $result;
    }
}