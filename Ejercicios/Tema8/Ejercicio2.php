<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Modifica el programa anterior añadiendo las siguientes mejoras: el listado debe aparecer paginado en caso de que haya muchos clientes. Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido. La opción de borrado debe pedir confirmación. Cuando se realice la modificación, los campos que no se han cambiado deberán permanecer inalterados en la base de datos.';
    }
}
