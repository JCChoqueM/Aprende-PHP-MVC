<?php

namespace Controllers;

use MVC\Router;

class TemaController
{
   public static function getEjercicio(Router $router, $tema, $ejercicio)
   {
      $class = "Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}";

      if (!class_exists($class)) {
         echo "Ejercicio no encontrado";
         return;
      }

      $data = $class::resolver();

      $router->render('content/content', $data);
   }
}
