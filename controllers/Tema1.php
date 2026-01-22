<?php

namespace Controllers;

use MVC\Router;
//asdfas
class Tema1Controller
{
   public static function getEjercicio(Router $router, $tema, $ejercicio)
   {
      // Generar un identificador único

      $key = "tema{$tema}_ejercicio{$ejercicio}";

      // Mapear a funciones independientes
      $logicas = [
         'tema1_ejercicio1' => [self::class, 'ejercicio1_1'],
         'tema10_ejercicio2' => [self::class, 'ejercicio1_1'],
         // ...
      ];

      if (isset($logicas[$key])) {
         call_user_func($logicas[$key], $router); // llama a la función correspondiente
      } else {
         echo json_encode(['error' => 'Ejercicio no encontrado']);
      }
   }

   private static function ejercicio1_1($router)
   {
      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio1',
         'descripcion' => 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP2.'
      ];
      $resultado = "Mi nombre es Julio Cesar Choque Mamani del curso de programacion web";

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }

   private static function ejercicio1_2()
   {
      $data = ['mensaje' => 'Hola desde ejercicio 1.2'];
      echo json_encode($data);
   }
   public static function ejercicio1(Router $router)
   {

      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio1',
         'descripcion' => 'Escribe un programa que muestre tu nombre por pantalla. Utiliza código PHP.'
      ];
      $resultado = "Mi nombre es Julio Cesar Choque Mamani del curso de programacion web";

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }
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
   public static function ejercicio3(Router $router)
   {

      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio3',
         'descripcion' => 'Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta ' . htmlspecialchars("<table>") .
            ' de HTML.',

      ];
      $translations = [
         ["Dog", "Perro"],
         ["Cat", "Gato"],
         ["House", "Casa"],
         ["Car", "Coche"],
         ["Book", "Libro"],
         ["Chair", "Silla"],
         ["Water", "Agua"],
         ["Sun", "Sol"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Moon", "Luna"],
         ["Tree", "Árbol"]
      ];
      $table = "<table border='1'>";
      $table .= "<tr><th>English</th><th>Español</th></tr>";
      foreach ($translations as $item) {
         $table .= "<tr><td>{$item[0]}</td><td>{$item[1]}</td></tr>";
      }
      $table .= "</table>";

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $table
      ]);
   }
   public static function ejercicio4(Router $router)
   {

      $datos = [
         'tema' => 'Tema 1',
         'ejercicio' => 'Ejercicio4',
         'descripcion' => 'Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.',

      ];
      $resultado = '
        <table border="5">
            <caption>
                Primer Módulo<br>
                Del 02 de Agosto al 17 de Septiembre de 2021<br>
                Ingeniería de Sistemas - Plan de Estudios Nuevo (Rediseño)
            </caption>
            <tr>
                <th>Hora</th>
                <th>1º semestre</th>
                <th>2º semestre</th>
                <th>3º semestre</th>
                <th>4º semestre</th>
                <th>5º semestre</th>
                <th>6º semestre</th>
                <th>7º semestre</th>
                <th>8º semestre</th>
            </tr>
            <tr>
                <td>19:00 <br>20:30</td>
                <td>Informatica I <br>Ing. Ery Cruz Burgoa</td>
                <td>Algebra Lineal <br>Lic. W. Adiviri</td>
                <td>Contabilidad Basica <br>Lic. A. Durán</td>
                <td>Lenguajes de Programación <br>Ing. M. Zabala U</td>
                <td>Optativa I <br>Ing. Y. Quintanilla</td>
                <td>Investigacion Operativa II <br>Ing. L. Flores</td>
                <td>Tecnologias Emergentes <br>Ing. M. Olmos</td>
                <td>Auditoria de Sistemas <br>Ing. G. Balderrama</td>
            </tr>
            <tr>
                <td>20:30 <br>22:00</td>
                <td>Administracion I <br>Lic. C. Calizaya</td>
                <td>Informatica II <br>Ing. R. Rojas</td>
                <td>Estadistica I <br>Ing. L. Flores</td>
                <td>Base de Datos I <br>Ing. M. Olmos</td>
                <td>Diseño de paginas web I <br>Ing. G. Balderrama</td>
                <td>Diseño de Paginas Web II <br>Ing. L. Santos</td>
                <td>Simulacion <br>Ing. A. Lara</td>
                <td>Administracion de Sis. De Inf <br>Ing. E. Flores</td>
            </tr>
        </table>
        ';

      $router->render("content/content", [
         'datos' => $datos,
         'resultado' => $resultado
      ]);
   }
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
}
