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

        // Convertir a string y quitar signo negativo si existe
        $numeroStr = ltrim((string) $numero, '-');

        // Si puede venir con decimales, opcional:
        $numeroStr = str_replace('.', '', $numeroStr);

        $cantidadDigitos = strlen($numeroStr);

        $result['respuesta'] = $cantidadDigitos;

        return $result;
    }
}