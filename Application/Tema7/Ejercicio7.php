<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio7 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = self::validar(['Color de fondo']);
        if (!$result['success']) return $result;

        ['Color de fondo' => $color] = $result['input'];

        // Guarda el color en una cookie

        // El render esperará:
        // data.input['Color de fondo'] → color introducido
        // data.respuesta.color         → color guardado en la cookie
        // data.respuesta.mensaje       → 'Color guardado correctamente'

        // Tu lógica aquí
        // setcookie('bgColor', $color, time() + 3600);
        // $result['respuesta'] = ...

        return $result;
    }
}
