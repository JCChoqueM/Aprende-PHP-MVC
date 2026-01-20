<?php

namespace Controllers;

use MVC\Router;

class TemaController
{
   public static function getEjercicio(Router $router, $URL, $tema, $ejercicio)
   {
      $class = ("\\Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}");
   
      //$class = "Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}";
      // $class = Ejercicios\Tema1\Ejercicio1::class;
      // $class = \Ejercicios\Tema1\Ejercicio1::class;
      // $class = '\Ejercicios\Tema1\\Ejercicio1';

      //$class= obtenerClaseDesdeRuta($tema);

      //dd($tema,$class);


      if (!class_exists($class)) {
         echo "Ejercicio no encontrado";
         return;
      }

      $data = $class::resolver();

      $router->render('content/content', $data);
   }
}
