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
         echo "El Tema{$tema} Ejercicio{$ejercicio} no fue encontrado";
         return;
      }

      $data = [
         'resultado' => $class::resolver(),
         'datos' => $class::metadata(),
      ];

      $router->render('content/content', $data);
   }
}
