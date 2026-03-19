<?php

namespace Ejercicios\Tema9;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return [
            'formularioBool' => true,
            'nombreFormulario' => 'formulario2',
            'dato1' => 'Zona',
            'placeholder1' => 'principal, compraventa o vip',
            'dato2' => 'Cantidad',
            'placeholder2' => 'Número de entradas a comprar',
        ];
    }

    protected static function enunciado(): string
    {
        return 'Gestión de venta de entradas de Expocoches Campanillas con 3 zonas: sala principal (1000 entradas), zona de compra-venta (200 entradas) y zona vip (25 entradas). Controla que existen entradas antes de venderlas. Define la clase Zona con sus atributos y métodos. El programa debe mostrar las entradas disponibles por zona y permitir vender entradas indicando zona y cantidad.';
    }
}
