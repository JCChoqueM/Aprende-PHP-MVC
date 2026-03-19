<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;
use Application\Validacion\Reglas\Rango;

class Ejercicio4 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Valor a reemplazar', 'Nuevo valor'], [new Rango(0, 20)]);
        if (!$result['success']) return $result;

        ['Valor a reemplazar' => $buscar, 'Nuevo valor' => $nuevo] = $result['input'];

        // El render esperará:
        // data.input['Valor a reemplazar'] → valor buscado
        // data.input['Nuevo valor']        → valor nuevo
        // data.respuesta                   → array de [valor, cambiado(bool)]

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
