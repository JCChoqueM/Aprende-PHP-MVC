<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\CantidadDigitos;

class Ejercicio19 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [new CantidadDigitos(1, 5)]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        $numero = abs((int) $numero);

        // El render esperará:
        // data.input.Número  → número entero positivo (máximo 5 cifras)
        // data.respuesta     → mensaje indicando si es capicúa o no

        switch (true) {
            // 1 dígito → siempre capicúa
            case ($numero < 10):
                $result['respuesta'] = 'Es capicúa';
                break;

            // 2 dígitos → primer dígito == último dígito
            case ($numero <= 99):
                $d1 = intdiv($numero, 10);
                $d2 = $numero % 10;
                $result['respuesta'] = $d1 == $d2 ? 'Es capicúa' : 'No es capicúa';
                break;

            // 3 dígitos → primer dígito == último dígito (el del medio no importa)
            case ($numero <= 999):
                $d1 = intdiv($numero, 100);
                $d3 = $numero % 10;
                $result['respuesta'] = $d1 == $d3 ? 'Es capicúa' : 'No es capicúa';
                break;

            // 4 dígitos → d1==d4 y d2==d3
            case ($numero <= 9999):
                $d1 = intdiv($numero, 1000);
                $d2 = intdiv($numero % 1000, 100);
                $d3 = intdiv($numero % 100, 10);
                $d4 = $numero % 10;
                $result['respuesta'] = ($d1 == $d4 && $d2 == $d3) ? 'Es capicúa' : 'No es capicúa';
                break;

            // 5 dígitos → d1==d5 y d2==d4 (d3 del medio no importa)
            case ($numero <= 99999):
                $d1 = intdiv($numero, 10000);
                $d2 = intdiv($numero % 10000, 1000);
                $d4 = intdiv($numero % 100, 10);
                $d5 = $numero % 10;
                $result['respuesta'] = ($d1 == $d5 && $d2 == $d4) ? 'Es capicúa' : 'No es capicúa';
                break;
        }

        return $result;
    }
}
