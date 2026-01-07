<?php

namespace Controllers;

use MVC\Router;



class Tema1Controller
{
   public static function index(Router $router)
   {

      $router->render("tema1/ejercicio1", [
 
      ]);
   }

}
