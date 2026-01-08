<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;

use Controllers\Tema1Controller;
use Controllers\PortadaController;

$router = new Router();

$router->get('/', [PortadaController::class, 'portada']);
// $router->get('/tema1/ejercicio1', [Tema1Controller::class, 'ejercicio1']);


$router->comprobarRutas();
