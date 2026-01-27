<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\APIController;
use Controllers\TemaController;
use Controllers\IndexController;


$router = new Router();


$router->get('/', [IndexController::class, 'index']);
$router->get('/tema{tema}/ejercicio{ejercicio}', [TemaController::class, 'getEjercicio']);
$router->get('/respuesta', [APIController::class, 'index']);

$router->post('/api/tema1/ejercicio1', [APIController::class, 'getEjercicio2']);
//si estas en 

//$router->get('/', ['Controllers\IndexController', 'index']);



// Comprobar rutas
$router->comprobarRutas();
