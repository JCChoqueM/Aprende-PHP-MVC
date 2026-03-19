<?php

namespace Application\Tema5;

use Application\AbstractEjercicio;

class Ejercicio12 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $campos = ['Traducción 1', 'Traducción 2', 'Traducción 3', 'Traducción 4', 'Traducción 5'];

        $result = self::validar($campos);
        if (!$result['success']) return $result;

        $traducciones = array_values($result['input']);

        // El render esperará:
        // data.respuesta.preguntas  → array de [palabra, respuestaUsuario, correcta(bool), traduccionCorrecta]
        // data.respuesta.correctas  → total de respuestas correctas
        // data.respuesta.erroneas   → total de respuestas erróneas

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
