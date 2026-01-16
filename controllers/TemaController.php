<?php

namespace Controllers;

use MVC\Router;




class TemaController
{
   public static function getEjercicio(Router $router, $tema, $ejercicio)
   {
      $class = "ejercicios\\tema{$tema}\\Ejercicio{$ejercicio}";
dd($class,$tema,$ejercicio,$router);

      if (!class_exists($class)) {
         echo "Ejercicio no encontrado";
         return;
      }

      $data = $class::resolver();

      $router->render('content/content', $data);
   }
}
