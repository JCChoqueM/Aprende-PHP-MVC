<?php

namespace Ejercicios\Tema1;

use Ejercicios\Contracts\EjercicioInterface;
use Ejercicios\Resultado\ResultadoHTML;

class Ejercicio2 implements EjercicioInterface
{
    public static function resolver(): ResultadoHTML
    {
        $contenido = "Mi nombre es Julio Cesar Choque Mamani. <br>" .
                     "Mi dirección es la calle 1 y Sargento Flores. <br>" .
                     "Mi número de teléfono es 999999999.";

        return new ResultadoHTML($contenido);
    }

    public static function enunciado(): string
    {
        return 'Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.';
    }
}
