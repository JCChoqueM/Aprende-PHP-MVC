<?php

namespace Controllers;

use MVC\Router;



class PortadaController
{
   public static function index(Router $router)
   {

      $router->render("portada/index", []);
   }
}
