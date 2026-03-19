<?php

namespace Ejercicios\Tema9;

use Ejercicios\EjercicioBase;

class Ejercicio3 extends EjercicioBase
{
    protected static function obtenerConfiguracionFormulario(): array
    {
        return ['formularioBool' => false];
    }

    protected static function enunciado(): string
    {
        return 'Crea la clase DadoPoker. Las caras de un dado de poker tienen las siguientes figuras: As, K, Q, J, 7 y 8. Crea el método tira() que genera un valor aleatorio. Crea el método nombreFigura() que devuelve la figura de la última tirada. Crea el método getTiradasTotales() que muestra el número total de tiradas entre todos los dados. Realiza una aplicación que permita tirar un cubilete con cinco dados de poker.';
    }
}
