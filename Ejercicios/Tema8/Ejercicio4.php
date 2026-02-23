<?php

namespace Ejercicios\Tema8;

use Ejercicios\EjercicioBase;

class Ejercicio4 extends EjercicioBase
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
        return 'Crea el programa GESTISIMAL (GESTIón SIMplifcada de Almacén) para llevar el control de los
artículos de un almacén. De cada artículo se debe saber el código, la descripción, el precio de
compra, el precio de venta y el stock (número de unidades). La entrada y salida de mercancía
supone respectivamente el incremento y decremento de stock de un determinado artículo. Hay que
controlar que no se pueda sacar más mercancía de la que hay en el almacén. El programa debe tener,
al menos, las siguientes funcionalidades: listado, alta, baja, modificación, entrada de mercancía y
salida de mercancía.';
    }
}
