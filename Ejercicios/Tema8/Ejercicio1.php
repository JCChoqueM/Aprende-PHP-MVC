<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio1 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente de la base de datos banco. El alta se realizará mediante un formulario con todos los campos del nuevo registro. Para realizar una baja, se mostrará un botón que ejecutará DELETE. La modificación se realiza mediante UPDATE.';
    }
}
