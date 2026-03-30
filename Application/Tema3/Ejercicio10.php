<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;

class Ejercicio10 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Día', 'Mes']);
        if (!$result['success']) return $result;

        ['Día' => $dia, 'Mes' => $mes] = $result['input'];

        $dia = (int) $dia;
        $mes = (int) $mes;

        $errores = [];

        if ($dia < 1 || $dia > 31) {
            $errores[] = "'Día' debe estar entre 1 y 31";
        }

        if ($mes < 1 || $mes > 12) {
            $errores[] = "'Mes' debe estar entre 1 y 12";
        }

        if (!empty($errores)) {
            $result['success'] = false;
            $result['errors']  = $errores;
            return $result;
        }

        $result['respuesta'] = match (true) {
            ($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19) => 'Aries ♈',
            ($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20) => 'Tauro ♉',
            ($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20) => 'Géminis ♊',
            ($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22) => 'Cáncer ♋',
            ($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22) => 'Leo ♌',
            ($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22) => 'Virgo ♍',
            ($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22) => 'Libra ♎',
            ($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21) => 'Escorpio ♏',
            ($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21) => 'Sagitario ♐',
            ($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19) => 'Capricornio ♑',
            ($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18) => 'Acuario ♒',
            ($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20) => 'Piscis ♓',
            default => 'Fecha inválida'
        };

        return $result;
    }
}
