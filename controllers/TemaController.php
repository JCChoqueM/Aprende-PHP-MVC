<?php

namespace Controllers;

use MVC\Router;
class TemaController
{
   public static function getEjercicio(Router $router, $URL, $tema, $ejercicio)
   {
      $class = ("\\Ejercicios\\Tema{$tema}\\Ejercicio{$ejercicio}");

      if (!class_exists($class)) {
         echo "El Tema{$tema} Ejercicio{$ejercicio} no fue encontrado";
         return;
      }

      // Determinar si el ejercicio tiene formulario
      $incluirFormulario = false;

      if (method_exists($class, 'formulario')) {
         $incluirFormulario = $class::formulario();
      }
      // Determinar si el ejercicio tiene resolver
      $resultado = '';
      if (method_exists($class, 'resolver')) {
         $resultado = $class::resolver($router);
      }
      $data = [
         'tema' => "Tema {$tema}",
         'ejercicio' => "Ejercicio {$ejercicio}",
         'enunciado' => $class::enunciado(),
         'resultado' => $resultado,
         'incluirFormulario' => $incluirFormulario,
      ];


      $router->render('content/content', $data);
   }
}
