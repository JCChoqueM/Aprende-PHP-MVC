
   public static function ejercicio5(Router $router)
   {

      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio5',
         'descripcion' => 'Escribe un programa que utilice las variables $x y $y. Asignales los valores 144 y 999 respectivamente.
A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.',

      ];
      $x = 144;
      $y = 999;
      $resultado = "la suma de $x + $y = " . $x + $y;
      $resultado .= "<br>la resta de $x - $y = " . $x - $y;
      $resultado .= "<br>la multiplicación de $x * $y = " . $x * $y;
      $resultado .= "<br>la división de $x / $y = " . round($x / $y, 3);
      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }