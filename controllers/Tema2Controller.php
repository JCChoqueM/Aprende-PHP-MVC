<?php

namespace Controllers;

use MVC\Router;

class Tema2Controller
{
   public static function ejercicio1(Router $router)
   {
      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio1',
         'descripcion' => 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.'
      ];
      $resultado = "soy tema2 controller 2";

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }
   public static function ejercicio2(Router $router)
   {
      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio2',
         'descripcion' => 'modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una linea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.'
      ];
      $router->render("content/content", [
         'datos' => $datos,
         'incluirFormulario' => true
      ]);
   }
}
