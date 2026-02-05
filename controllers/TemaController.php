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

      // Configuración del formulario
      $incluirFormulario = [
         'formularioBool' => false,
         'nombreFormulario' => '',
      ];

      if (method_exists($class, 'formulario')) {
         $incluirFormulario = $class::formulario();
      }

      // El resultado se maneja solo para ejercicios sin formulario (con resolver)
      $resultado = '';
      
      if (method_exists($class, 'resolver')) {
         $resultado = $class::resolver();
      }
      // Si tiene procesar(), el resultado viene de la API, no aquí

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