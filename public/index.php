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

$router->get('/api/tema{tema}/ejercicio{ejercicio}', [APIController::class, 'getEjercicio2']);


$router->comprobarRutas();
