<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

use Controllers\IndexController;
use Controllers\Tema1Controller;

$router = new Router();

$router->get('/', [IndexController::class, 'index']);
$router->get('/tema1/ejercicio1', [Tema1Controller::class, 'ejercicio1']);
$router->get('/tema1/ejercicio2', [Tema1Controller::class, 'ejercicio2']);

$router->get('/tema2/ejercicio1', [Tema1Controller::class, 'ejercicio1']);
$router->get('/tema2/ejercicio2', [Tema1Controller::class, 'ejercicio2']);

$router->get('/tema3/ejercicio1', [Tema1Controller::class, 'ejercicio1']);
$router->get('/tema3/ejercicio2', [Tema1Controller::class, 'ejercicio2']);

$router->comprobarRutas();
