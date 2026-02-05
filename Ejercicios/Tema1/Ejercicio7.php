<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoHTML;
use Ejercicios\Contracts\EjercicioInterface;

class Ejercicio7 extends EjercicioBase
{
       protected static function obtenerResultado(): ResultadoHTML
    {
        $nombre = "Mi nombre es BrowserSync. <br>";
        $direccion = "Mi direccion es : Ejercicio\Tema1\Ejercicio7. <br>";
        $telefono = "Mi número de teléfono es 171717.";
        $contenido = "$nombre $direccion  $telefono";

        return new ResultadoHTML($contenido);
    }

    public static function enunciado(): string
    {
        return 'Crea las variables $nombre, $direccion y $telefono y asígnales los valores adecuados. Muestra los valores por pantalla de tal forma que el resultado sea el mismo que el del ejercicio 2.';
    }
}
