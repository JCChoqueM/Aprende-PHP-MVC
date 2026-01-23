<?php

namespace Controllers;

use Model\Cita;
use MVC\Router;
use Model\Servicio;
use Model\CitaServicio;

class APIController
{
  public static function index()
  {


    echo json_encode(['mensaje' => 'API Funcionando']);
  }
  public static function getEjercicio(Router $router, $URL = null, $tema = null, $ejercicio = null)
  {
    $key = "tema1_ejercicio1";

    $logicas = [
      'tema1_ejercicio1' => [self::class, 'ejercicio1_1'],
      'tema1_ejercicio2' => [self::class, 'ejercicio1_2'],
      // ...
    ];

    if (isset($logicas[$key])) {
      call_user_func($logicas[$key], $router); // siempre pasar router
    } else {
      echo json_encode(['error' => 'Ejercicio no encontrado']);
    }
  }


  private static function ejercicio1_1($router)
  {
    $data = ['mensaje' => 'Hola desde ejercicio que te importa'];
    echo json_encode($data);
  }

  private static function ejercicio1_2($router)
  {
    $data = ['mensaje' => 'Hola desde ejercicio 1.2'];
    echo json_encode($data);
  }
}
