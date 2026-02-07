<?php

namespace Ejercicios\Tema2;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    public static function procesar(): array  // ✅ Retorna array, no JSON
    {
        $a = floatval($_POST['campo1'] ?? 0);
        $b = floatval($_POST['campo2'] ?? 0);
        
        $suma = $a + $b;
        $resta = $a - $b;
        $multiplicacion = $a * $b;
        
        $contenido = "la suma de " . $a . " mas " . $b . " es: " . $suma . "<br><br>";
        $contenido .= "la resta de " . $a . " menos " . $b . " es: " . $resta . "<br><br>";
        $contenido .= "la multiplicacion de " . $a . " por " . $b . " es: " . $multiplicacion . "<br><br>";
        
        if ($b == 0) {
            $contenido .= "la division entre 0 no es posible<br><br>";
        } else {
            $division = $a / $b;
            $contenido .= "la division de " . $a . " entre " . $b . " es: " . $division . "<br><br>";
        }
        
        // ✅ Retornar array (se convertirá a JSON automáticamente)
        return [
            'mensaje' => $contenido,
          
        ];
    }

    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Primer Numero',
            'placeholder1' => 'ingrese el primer Numero',
            'dato2' => 'Segundo Numero',
            'placeholder2' => 'ingrese el segundo Numero',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.';
    }
}
