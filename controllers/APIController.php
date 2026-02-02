<?php

namespace Controllers;

use MVC\Router;

class APIController
{
    public static function ejercicioAPI(Router $router, $URL, $tema, $ejercicio)
    {
        $class = "\\Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}";

        // Validar clase
        if (!class_exists($class)) {
            self::jsonError('Ejercicio no encontrado');
            return;
        }

        // Validar método procesar
        if (!method_exists($class, 'procesar')) {
            self::jsonError('Este ejercicio no tiene procesamiento API');
            return;
        }

        // Ejecutar lógica del ejercicio
        $resultado = $class::procesar($router);

        echo json_encode($resultado);
    }

    private static function jsonError(string $mensaje): void
    {
        echo json_encode([
            'error' => true,
            'mensaje' => $mensaje
        ]);
    }
}
