<?php

namespace Controllers;

use MVC\Router;



class PortadaController
{
   public static function portada(Router $router)
   {
      $router->render("portada/portada", []);
   }
}
