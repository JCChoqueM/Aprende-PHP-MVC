<?php

namespace Ejercicios\Tema1;

class Ejercicio2
{
    public static function resolver(): array
    {
        return [
            'resultado' => 'Mi nombre es Julio Cesar Choque Mamani. <br> Mi direccion es la calle 1 y sargento flores. <br> Mi numero de telefono es el 999999999.'
        ];
    }
    public static function enunciado(): string
    {
        return
            'Modifica el programa anterior para que muestre tu dirección y tu número de teléfono. Cada dato se debe mostrar en una línea diferente. Mezcla de alguna forma las salidas por pantalla, utilizando tanto HTML como PHP.';
    }
}
