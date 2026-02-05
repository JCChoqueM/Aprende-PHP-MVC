<?php

namespace Controllers;

use MVC\Router;

class TemaController
{
    public static function getEjercicio(Router $router, $URL, int $tema, int $ejercicio)
    {
        $class = "\\Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}";

        if (!class_exists($class)) {
            echo "El Tema{$tema} Ejercicio{$ejercicio} no fue encontrado";
            return;
        }

        // El ejercicio construye TODA su data, incluyendo metadata
        $data = $class::obtenerData($tema, $ejercicio);

        $router->render('content/content', $data);
    }
}