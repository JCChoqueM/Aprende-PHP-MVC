<?php

namespace Ejercicios\Tema1;

use Ejercicios\EjercicioBase;
use Ejercicios\Resultado\ResultadoTexto;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio2 extends EjercicioBase
{
    public static function enunciado(): string
    {
        return 'Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.';
    }
    protected static function obtenerResultado(): ResultadoHTML
    {
        $contenido = "Mi nombre es Julio Cesar Choque Mamani. <br>" .
            "Mi dirección es la calle 1 y Sargento Flores. <br>" .
            "Mi número de teléfono es 999999999.";

        return new ResultadoHTML($contenido);
    }
}
