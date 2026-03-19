<?php

namespace Application\Tema7;

use Application\AbstractEjercicio;

class Ejercicio8 extends AbstractEjercicio
{
    public static function procesar(): array
    {
        $result = ['success' => true];

        // Acciones posibles: 'jugar', 'añadir', 'comprobar'
        $accion = $_POST['accion'] ?? 'jugar';

        // El render esperará según acción:
        // accion = 'jugar':
        //   data.respuesta.palabras    → 5 palabras en inglés escogidas al azar de las cookies
        // accion = 'añadir':
        //   data.respuesta.mensaje     → 'Par añadido correctamente'
        // accion = 'comprobar':
        //   data.respuesta.resultados  → array de [palabra, respuestaUsuario, correcta(bool), traduccionCorrecta]
        //   data.respuesta.correctas   → total correctas
        //   data.respuesta.erroneas    → total erróneas

        // Tu lógica aquí
        // $result['respuesta'] = ...

        return $result;
    }
}
