<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;


class Ejercicio11 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Horas', 'Minutos']);
        if (!$result['success']) return $result;

        ['Horas' => $horas, 'Minutos' => $minutos] = $result['input'];

        // El render esperará:
        // data.input.Horas    → horas (0-23)
        // data.input.Minutos  → minutos (0-59)
        // data.respuesta      → segundos que faltan para medianoche

        // Tu lógica aqui
        $errores = [];

        if ($horas < 0 || $horas > 23) {
            $errores[] = "'Hora' debe estar entre 1 y 23";
        }

        if ($minutos < 0 || $minutos > 59) {
            $errores[] = "'Minutos' debe estar entre 1 y 59";
        }

        if (!empty($errores)) {
            $result['success'] = false;
            $result['errors']  = $errores;
            return $result;
        }
        $segundos = $horas * 3600 + $minutos * 60;
        $segundosRestantes = 86400 - $segundos;
        $result['respuesta'] = $segundosRestantes;

        return $result;
    }
}
