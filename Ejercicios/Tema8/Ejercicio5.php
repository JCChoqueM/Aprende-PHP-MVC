<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio5 extends EjercicioBase
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
• Comprueba la existencia del código en el alta, la baja y la modificación de artículos para
evitar errores.
• Cambia la opción “Salida de stock” por “Venta”. Esta nueva opción permitirá hacer una venta
de varios artículos y emitir la factura correspondiente. Se debe preguntar por los códigos y
las cantidades de cada artículo que se quiere comprar. Aplica un 21% de IVA.';
    }
}
