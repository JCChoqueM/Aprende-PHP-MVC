<?php

namespace Ejercicios\Tema1;

class Ejercicio2
{
    public static function resolver(): array
    {
        return [
            'resultado' => 'Mi nombre es Julio Cesar Choque Mamani'
        ];
    }
    public static function metadata(): array
    {
        return [
            'tema' => 'Tema 2',
            'ejercicio' => 'Ejercicio 2',
            'descripcion' =>
            'Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.'
        ];
    }
}
