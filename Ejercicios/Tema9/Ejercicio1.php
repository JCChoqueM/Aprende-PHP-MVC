<?php

namespace Ejercicios\Tema9;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea las clases Animal, Mamifero, Ave, Gato, Perro, Canario, Pinguino y Lagarto. Crea al menos tres métodos específicos de cada clase y redefine los métodos cuando sea necesario. Prueba las clases en un programa en el que se instancien objetos y se les apliquen métodos.';
    }
}
