<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio2 extends EjercicioBase
{


    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Base (metros)',
            'placeholder1' => 'Ingrese la base del rectángulo',
            'dato2' => 'Altura (metros)',
            'placeholder2' => 'Ingrese la altura del rectángulo',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Modifica el programa anterior añadiendo las siguientes mejoras:
• El listado debe aparecer paginado en caso de que haya muchos clientes.
• Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido en
el formulario.
• La opción de borrado debe pedir confirmación.
• Cuando se realice la modificación de los datos de un cliente, los campos que no se han
cambiado deberán permanecer inalterados en la base de datos.';
    }
}
