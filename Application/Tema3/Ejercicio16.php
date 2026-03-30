<?php

namespace Application\Tema3;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\CantidadDigitos;

class Ejercicio16 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Número'], [new CantidadDigitos(1, 5)]);
        if (!$result['success']) return $result;

        ['Número' => $numero] = $result['input'];

        // El render esperará:
        // data.input.Número  → número entero
        // data.respuesta     → última cifra del número

        // Tu lógica aqui
        $numero=abs($numero);
        $result['respuesta'] = $numero % 10;

        return $result;
    }
}