<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\CantidadDigitos;

class Ejercicio18 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [new CantidadDigitos(1, 5)]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero (positivo o negativo, máximo 5 dígitos)
        // data.respuesta     → cantidad de dígitos del número

        $numero = abs($numero);
        $result['respuesta'] = match (true) {
            ($numero < 10) => "1 digito",
            ($numero >= 10 && $numero < 100)  => "2 digitos",
            ($numero >= 100 && $numero < 1000)  => "3 digitos",
            ($numero >= 1000 && $numero < 10000)  => "4 digitos",
            ($numero >= 10000 && $numero < 100000)  => "5 digitos",
            default => 'Numero Invalido',
        };

        return $result;
    }
}
