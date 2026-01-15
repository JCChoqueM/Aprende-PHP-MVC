<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIController;
use Controllers\Tema1Controller;
use Controllers\IndexController; // Solo para la ruta principal
//use Controllers\Tema1Controller; 
//use Controllers\Tema2Controller; 

$router = new Router();


$router->get('/', [IndexController::class, 'index']);
$router->get('/respuesta', [APIController::class, 'index']);
$router->get('/api/tema/{tema}/ejercicio/{ejercicio}', [APIController::class, 'getEjercicio']);

//$router->get('/', ['Controllers\IndexController', 'index']);
$router->get('/tema/{tema}/ejercicio/{ejercicio}', [Tema1Controller::class, 'getEjercicio']); 
$router->get('/tema{tema}/ejercicio{ejercicio}', [Tema1Controller::class, 'getEjercicio']); 
 $router->get('/tema1/ejercicio1', [Tema1Controller::class, 'ejercicio1']);
 $router->get('/tema1/ejercicio2', [Tema1Controller::class, 'ejercicio2']);
 $router->get('/tema1/ejercicio3', [Tema1Controller::class, 'ejercicio3']);


// Comprobar rutas
$router->comprobarRutas();
