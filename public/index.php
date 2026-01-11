<?php
require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\IndexController; // Solo para la ruta principal
//use Controllers\Tema1Controller; 
//use Controllers\Tema2Controller; 

$router = new Router();


$router->get('/', [IndexController::class, 'index']);
$router->get('/', ['Controllers\IndexController', 'index']);
// $router->get('/tema1/ejercicio1', [Tema1Controller::class, 'ejercicio1']); 
// $router->get('/tema1/ejercicio2', [Tema1Controller::class, 'ejercicio2']);

function registrarRutasTema(Router $router, int $numeroTema, int $cantidadEjercicios) {
    // Aquí generamos el controller dinámicamente, sin necesidad de "use"
    //Clase::class => Tema1Controller::class
    // =
    // "Namespace\\Clase" => "Controllers\Tema1Controller"; 
    $controllerClass = 'Controllers\Tema'.$numeroTema.'Controller'; //Tema2Controller::class

    for ($i = 1; $i <= $cantidadEjercicios; $i++) {
        $router->get('/tema'.$numeroTema."/ejercicio{$i}", [$controllerClass, "ejercicio{$i}"]);
  
    }
}

/**
 * Función para registrar todas las rutas de todos los temas
 */
function registrarTodosLosTemas(Router $router, array $temas) {
    foreach ($temas as $tema) {
        registrarRutasTema($router, $tema['numero'], $tema['cantidad']);
    }
}

// Configuración de los 12 temas
$temas = [
    ['numero' => 1,  'cantidad' => 12],
    ['numero' => 2,  'cantidad' => 11],
    ['numero' => 3,  'cantidad' =>19],
    ['numero' => 4,  'cantidad' => 29],
    ['numero' => 5,  'cantidad' => 15],
    ['numero' => 6,  'cantidad' => 34],
    ['numero' => 7,  'cantidad' => 9],
    ['numero' => 8,  'cantidad' => 5],
    ['numero' => 9,  'cantidad' => 4],
    ['numero' => 10, 'cantidad' => 3],
    ['numero' => 11, 'cantidad' => 2],
    ['numero' => 12, 'cantidad' => 4],
];

// Registrar automáticamente todas las rutas
registrarTodosLosTemas($router, $temas);

// Comprobar rutas
$router->comprobarRutas();
