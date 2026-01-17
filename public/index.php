<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIController;
use Controllers\TemaController;
use Controllers\Tema2Controller;
use Controllers\IndexController;


$router = new Router();


$router->get('/', [IndexController::class, 'index']);
$router->get('/respuesta', [APIController::class, 'index']);
$router->get('/api/tema/{tema}/ejercicio/{ejercicio}', [APIController::class, 'getEjercicio']);

$router->get('/tema2/ejercicio1', [Tema2Controller::class, 'ejercicio1']);
//$router->get('/', ['Controllers\IndexController', 'index']);
$router->get('/tema{tema}/ejercicio{ejercicio}', [TemaController::class, 'getEjercicio']); 



// Comprobar rutas
$router->comprobarRutas();
