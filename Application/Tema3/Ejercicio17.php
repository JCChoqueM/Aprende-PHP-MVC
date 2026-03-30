<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\CantidadDigitos;

class Ejercicio17 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [new CantidadDigitos(1, 5)]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero (máximo 5 cifras)
        // data.respuesta     → primera cifra del número

        // Tu lógica aqui
        $numero = abs($numero);
        $result['respuesta'] = match (true) {
            ($numero < 10) => $numero,
            ($numero >= 10 && $numero <= 100)  => intdiv($numero, 10),
            ($numero >= 100 && $numero <= 1000)  => intdiv($numero, 100),
            ($numero >= 1000 && $numero <= 10000)  => intdiv($numero, 1000),
            ($numero >= 10000 && $numero <= 99999)  => intdiv($numero, 10000),
            default => 'Numero Invalido',
        };


        return $result;
    }
}
