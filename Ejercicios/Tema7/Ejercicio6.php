<?php

namespace Ejercicios\Tema7;

use Ejercicios\EjercicioBase;

class Ejercicio6 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada uno de los productos del catálogo deberá tener un botón Detalle que, al ser accionado, debe llevar al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión. Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.';
    }
}
