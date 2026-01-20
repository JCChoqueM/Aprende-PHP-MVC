<?php

namespace Ejercicios\Tema1;

class Ejercicio1
{
    public static function resolver(): array
    {
              $x = 144;
      $y = 999;
      $resultado = "la suma de $x + $y = " . $x + $y;
      $resultado .= "<br>la resta de $x - $y = " . $x - $y;
      $resultado .= "<br>la multiplicación de $x * $y = " . $x * $y;
      $resultado .= "<br>la división de $x / $y = " . round($x / $y, 3);
        return [
            'resultado' => 'Mi nombre es Julio Cesar Choque Mamani'
        ];
    }
    public static function metadata(): array
    {
        return [
            'tema' => 'Tema 1',
            'ejercicio' => 'Ejercicio 1',
            'descripcion' =>
            'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.'
        ];
    }
}
