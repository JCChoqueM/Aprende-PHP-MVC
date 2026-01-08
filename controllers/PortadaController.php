<?php

namespace Controllers;

use MVC\Router;



class PortadaController
{
   public static function portada(Router $router)
   {
dd($router);
      $router->render("portada/portada", []);
   }
}
