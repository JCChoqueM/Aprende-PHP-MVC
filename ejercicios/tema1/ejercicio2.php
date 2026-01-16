   public static function ejercicio2(Router $router)
   {
      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio2',
         'descripcion' => 'modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una linea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.'
      ];
      $resultado = "Mi nombre es Julio Cesar Choque Mamani del curso de programacion web<br> vivo en la calle R";

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }